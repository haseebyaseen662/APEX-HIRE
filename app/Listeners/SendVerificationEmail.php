<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Mail\VerifyEmailMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Queue\InteractsWithQueue;

class SendVerificationEmail Implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        $user = $event->user;

        // This listener runs in a queue worker (no HTTP request), so force the URL generator
        // to use the same host the user registered on (e.g. http://127.0.0.1:8000).
        $scheme = parse_url($event->appUrl, PHP_URL_SCHEME);
        if (is_string($scheme) && $scheme !== '') {
            URL::forceScheme($scheme);
        }
        URL::forceRootUrl($event->appUrl);

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $user->getKey(),
                'hash' => sha1($user->getEmailForVerification()),
            ],
        );

        Mail::to($user->email)->send(new VerifyEmailMail($user, $verificationUrl));
    }
}
