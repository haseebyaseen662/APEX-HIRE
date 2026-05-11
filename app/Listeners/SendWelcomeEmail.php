<?php

namespace App\Listeners;

use App\Mail\WaitlistJoinedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\WaitlistJoinedEvent;

class SendWelcomeEmail implements ShouldQueue
{
    public function __construct() {}

    public function handle(WaitlistJoinedEvent $event): void
    {
        Mail::to($event->waitlist->email)->queue(new WaitlistJoinedMail($event->waitlist));
    }
}

