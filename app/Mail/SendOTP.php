<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOTP extends Mailable
{
    use Queueable, SerializesModels;
    protected $otp;
    protected $account;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$password)
    {
        $this->account = $user->account;
        $this->otp = $this->account->verification_code;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Verifikasi Alamat Email')
        ->from('help.pointofsales@gmail.com')
        ->view('auth.send')
        ->with([
            'otp'=> $this->otp,
            'account' => $this->account,
            'password' => $this->password
        ]

        );
    }
}
