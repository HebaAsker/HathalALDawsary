<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $subject = 'رسالة جديدة من ' . $this->data['name'] . ' في نموذج الاتصال الخاص بموقعنا';

        return $this->from(config('mail.from.address'))
                    ->replyTo($this->data['email'], $this->data['name'])
                    ->subject($subject)
                    ->markdown('emails.contact')
                    ->with(['data' => $this->data]);
    }
}



