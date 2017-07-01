<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $from_name;
    public $from_email;
    public $message_text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($from_name, $from_email, $message_text)
    {
        $this->from_name = $from_name;
        $this->from_email = $from_email;
        $this->message_text = $message_text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('tech@stjohnscccc.org', 'St. John\'s Contact Form')
                    ->view('email.contact');
    }
}
