<?php

namespace App\Listeners;

use App\Events\OrderCreatEvent;
use App\Mail\OrderCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class sendOrderListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderCreatEvent $event): void
    {
        Mail::to($event->email)->send(new OrderCreatedMail($event->data));
         
    }
}
