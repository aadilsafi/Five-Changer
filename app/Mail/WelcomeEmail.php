<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('emails.welcome')
        ->subject('Willkommen bei AdLotto! 🎉')
        ->withSwiftMessage(function ($message) {
            $message->getHeaders()
                    ->addTextHeader('Content-Type', 'text/html; charset=UTF-8');
        });
    }
}
