<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Events\MessageSending;
use Illuminate\Queue\InteractsWithQueue;

class AddSendGridHeader
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(MessageSending $event)
    {
        if(env('SENDGRID_CATEGORY')) {
            $event->message
                ->getHeaders()
                ->addTextHeader('X-SMTPAPI', json_encode(['category' => env('SENDGRID_CATEGORY')]));
        }
    }
}
