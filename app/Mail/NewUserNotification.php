<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserNotification extends Mailable
{
    use SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('emails.new-user')
            ->subject(subject: 'Neuer Benutzer bei AdLotto registriert')
            ->to('info@adlotto.de');
    }
}
