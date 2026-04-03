<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmailMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
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

            return redirect()->route('login')->with('status', 'Your email is already verified. You can log in now.');
        }

        $lastSentAt = Cache::get('verification_email_last_sent_at:'.$user->email)
            ?? $request->session()->get('verification_email_last_sent_at');

        if ($lastSentAt) {
            $secondsSinceLastSend = Carbon::createFromTimestamp((int) $lastSentAt)->diffInSeconds(now());

            if ($secondsSinceLastSend < 60) {
                return back()->with('status', 'verification-link-cooldown');
            }
        }

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $user->getKey(),
                'hash' => sha1($user->getEmailForVerification()),
            ],
        );

        Mail::to($user->email)->queue(new VerifyEmailMail($user, $verificationUrl));

        Cache::put(
            'verification_email_last_sent_at:'.$user->email,
            Carbon::now()->timestamp,
            now()->addDay()
        );
        $request->session()->put('verification_email', $user->email);
        $request->session()->put('verification_email_last_sent_at', Carbon::now()->timestamp);

        return back()->with('status', 'verification-link-sent');
    }
}
