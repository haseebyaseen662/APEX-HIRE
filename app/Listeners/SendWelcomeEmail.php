<?php

namespace App\Listeners;

use App\Mail\WaitlistJoinedMail;
use Illuminate\Support\Facades\Mail;
use App\Events\WaitlistJoinedEvent;

class SendWelcomeEmail
{
    public function __construct() {}

    public function handle(WaitlistJoinedEvent $event): void
    {
        Mail::to($event->waitlist->email)->send(new WaitlistJoinedMail($event->waitlist));
    }
}

