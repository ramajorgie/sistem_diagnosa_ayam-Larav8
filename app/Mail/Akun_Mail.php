<?php

namespace App\Mail;

use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Akun_Mail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->key = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
           
        return $this->from('Noreplay@gmail.com')
                   ->view('confirm.mail_confirm')
                   ->with(
                    [
                        'website' => 'spk.amirr.pw',
                        'username' => $this->key->username,
                        
                    ]);

    }
}
