<?php

namespace App\Listeners;

use App\Events\WaitlistJoined;
use App\Mail\WaitlistJoinedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail implements ShouldQueue
{
    public function __construct() {}

    public function handle(WaitlistJoined $event): void
    {
        Mail::to($event->waitlist->email)->queue(new WaitlistJoinedMail($event->waitlist));
    }
}
