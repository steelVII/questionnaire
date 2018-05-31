<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuestionnaireSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($single)
    {
        $this->single = $single;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $single = $this->single;

        return $this->from('questionnaire@naxpansion.com')->view('email.email',compact('single'));
    }
}
