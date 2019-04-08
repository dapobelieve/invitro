<?php

namespace App\Listeners;

use Mail;
use App\Events\ApplicationCreatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\TrainingRegistered;


class ApplicationCreatedListener
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
     * @param  ApplicationCreatedEvent  $event
     * @return void
     */
    public function handle(ApplicationCreatedEvent $event)
    {
//        dd($event->applicant);
        Mail::to($event->applicant->email)->send(new TrainingRegistered($event->applicant));
    }
}
