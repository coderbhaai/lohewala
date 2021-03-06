<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactmail extends Mailable
{
    use Queueable, SerializesModels;
    public $x;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($xx){
        $this->x = $xx;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thank you for connecting with Lohewala')
        ->markdown('emails.ContactMail');
    }
}
