<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;
    protected $password;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newpassword)
    {
        $this->password = $newpassword;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Password')
        ->from('help.pointofsales@gmail.com')
        ->view('auth.forgot')
        ->with([
            'password'=> $this->password,
        ]

        );
    }
}
