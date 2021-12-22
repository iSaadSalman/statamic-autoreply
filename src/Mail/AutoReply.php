<?php

namespace ISaadSalman\StatamicAutoreply\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AutoReply extends Mailable
{

    
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $refrence = "autoreply";

    public $body = [];
    public $submitionNumber = '';

    public function __construct($body, $submitionNumber)
    {
        $this->body = $body;
        $this->submitionNumber = $submitionNumber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('statamic-autoreply::autoreply')
                    ->subject("Thanks for contacting us");
    }
}
