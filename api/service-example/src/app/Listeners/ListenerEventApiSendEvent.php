<?php

namespace App\Listeners;

use App\Events\EventApiSendEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ListenerEventApiSendEvent implements ShouldQueue
{
    public $connection = 'redis';
    public $queue = 'event.site';

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
    public function handle(EventApiSendEvent $event): void
    {
        Log::debug("In Api");
    }
}
