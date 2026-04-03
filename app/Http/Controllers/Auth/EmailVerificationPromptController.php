<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        $email = $request->user()?->email ?? $request->session()->get('verification_email');

        if (! $email) {
            return redirect()->route('login');
        }

        $user = User::where('email', $email)->first();

        if (! $user) {
            $request->session()->forget('verification_email');
            $request->session()->forget('verification_email_last_sent_at');

            return redirect()->route('register');
        }

        if ($user->hasVerifiedEmail()) {
            $request->session()->forget('verification_email');
            $request->session()->forget('verification_email_last_sent_at');
            Cache::forget('verification_email_last_sent_at:'.$user->email);

            return redirect()->route('login')
                ->with('status', 'Your email is already verified. You can log in now.');
        }

        $lastSentAt = Cache::get('verification_email_last_sent_at:'.$user->email)
            ?? $request->session()->get('verification_email_last_sent_at');
        $cooldownRemaining = 0;

        if ($lastSentAt) {
            $cooldownRemaining = max(
                0,
                60 - Carbon::createFromTimestamp((int) $lastSentAt)->diffInSeconds(now())
            );
        }

        $request->session()->put('verification_email_last_sent_at', $lastSentAt);

        return view('auth.verify-email', [
            'email' => $user->email,
            'cooldownRemaining' => $cooldownRemaining,
        ]);
    }
}
