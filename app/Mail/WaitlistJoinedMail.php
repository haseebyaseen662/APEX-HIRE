<?php

namespace App\Mail;

use App\Models\Waitlist;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class WaitlistJoinedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Waitlist $waitlist) {}

    public function content(): Content
    {
        return new Content(
            html: 'emails.waitlist-joined',
            text: 'emails.waitlist-joined-text',  
        );
    }
}