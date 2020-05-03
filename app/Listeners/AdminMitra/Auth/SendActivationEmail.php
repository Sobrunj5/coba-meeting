<?php

namespace App\Listeners\AdminMitra\Auth;

use App\Events\AdminMitra\Auth\AdminMitraActivationEmail;
use App\Mail\AdminMitra\Auth\ActivationEmail;
use Illuminate\Support\Facades\Mail;

class SendActivationEmail
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


    public function handle(AdminMitraActivationEmail $event)
    {
       if($event->mitra->active){
           return;
       }
       Mail::to($event->mitra->email)->send(new ActivationEmail($event->mitra));
    }
}
