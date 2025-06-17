<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
  use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
   return $this->from(config('mail.from.address'), config('mail.from.name')) // your verified email
                    ->replyTo($this->details['email'], $this->details['name'])   // sender's email & name
                    ->subject('New Contact Message')
                    ->view('emails.email');
    }
}
