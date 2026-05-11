<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Waitlist;

class WaitlistJoinedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Waitlist $waitlist) {}

    public function build()
    {
        return $this->to($this->waitlist->email)->view('pages.waitlist-joined');
    }
}