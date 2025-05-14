<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
{
    $this->data = $data;
}

public function build()
{
    return $this->subject('Newsletter Subscription')
                ->view('emails.newsletter_confirmation')
                ->with('data', $this->data);
}


}