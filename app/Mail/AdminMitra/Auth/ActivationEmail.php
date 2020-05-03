<?php

namespace App\Mail\AdminMitra\Auth;

use App\Mitra;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $mitra;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Mitra $mitra)
    {
        $this->mitra = $mitra;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.auth.activation');
    }
}
