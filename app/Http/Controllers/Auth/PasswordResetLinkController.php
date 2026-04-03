<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        $email = session('password_reset_email');
        $cooldownRemaining = 0;

        if ($email) {
            $lastSentAt = Cache::get('password_reset_last_sent_at:'.mb_strtolower($email))
                ?? session('password_reset_last_sent_at');

            if ($lastSentAt) {
                $cooldownRemaining = max(
                    0,
                    60 - Carbon::createFromTimestamp((int) $lastSentAt)->diffInSeconds(now())
                );
            }
        }

        return view('auth.forgot-password', [
            'cooldownRemaining' => $cooldownRemaining,
            'email' => $email,
        ]);
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $email = mb_strtolower($request->string('email')->trim()->value());
        $cacheKey = 'password_reset_last_sent_at:'.$email;
        $lastSentAt = Cache::get($cacheKey);

        if ($lastSentAt) {
            $secondsSinceLastSend = Carbon::createFromTimestamp((int) $lastSentAt)->diffInSeconds(now());

            if ($secondsSinceLastSend < 60) {
                $request->session()->put('password_reset_email', $email);
                $request->session()->put('password_reset_last_sent_at', (int) $lastSentAt);

                return back()->with('status', 'password-reset-link-cooldown');
            }
        }

        $user = User::where('email', $email)->first();

        if ($user) {
            $token = Password::broker()->createToken($user);
            $resetUrl = URL::route('password.reset', [
                'token' => $token,
                'email' => $user->email,
            ]);

            Mail::to($user->email)->queue(new ResetPasswordMail($user, $resetUrl));
        }

        $timestamp = now()->timestamp;

        Cache::put($cacheKey, $timestamp, now()->addDay());
        $request->session()->put('password_reset_email', $email);
        $request->session()->put('password_reset_last_sent_at', $timestamp);

        return back()->with('status', 'password-reset-link-sent');
    }
}
