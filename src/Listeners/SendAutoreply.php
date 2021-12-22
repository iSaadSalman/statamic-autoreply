<?php

namespace ISaadSalman\StatamicAutoreply\Listeners;

use Statamic\Events\FormSubmitted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use ISaadSalman\StatamicAutoreply\Mail\AutoReply;


class SendAutoreply
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
     * @param  \App\Events\MessageSent  $event
     * @return void
     */
    public function handle(FormSubmitted $event)
    {   
        $submitionNumber =  uniqid();

        
        $formData = $event->submission->data();
        $replyData = [];

        foreach ( $event->submission->fields() as $key => $value) {
            if ($key != 'random_id') {
                $replyData[$value['display']] = $formData[$key];
            }
        }

        $autoreply = new AutoReply($replyData, $submitionNumber );
        Mail::to( $event->submission->email)->send($autoreply);

        $event->submission->random_id = $submitionNumber; 
        $event->submission->save();
    }
}
