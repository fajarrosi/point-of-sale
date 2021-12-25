<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Resendotp extends Mailable
{
    use Queueable, SerializesModels;
    protected $otp;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($account)
    {
        $this->otp = $account->verification_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Resend Verifikasi Email')
        ->from('help.pointofsales@gmail.com')
        ->view('auth.resend')
        ->with([
            'otp'=> $this->otp,
        ]

        );
    }
}
