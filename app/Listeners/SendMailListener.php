<?php

namespace App\Listeners;

use App\Events\SendMailEvent;
use App\Mail\ContactMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(SendMailEvent $event): void
    {
        // dd($event->data);
        Mail::to('hathalaldawsary7@gmail.com')->send(new ContactMail($event->data));
    }
}
