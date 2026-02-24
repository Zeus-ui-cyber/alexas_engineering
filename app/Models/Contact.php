<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $mailData;

    public function __construct(array $data)
    {
        $this->mailData = $data;
    }

    public function build()
    {
        return $this->subject('New Inquiry: ' . $this->mailData['subject'])
            ->view('emails.contact'); 
    }
}