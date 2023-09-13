<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class EventApiSendEvent
{
    use Dispatchable, InteractsWithQueue, SerializesModels;

    public $connection = 'redis';
    public $queue = 'event.site';

    public $eventName;
    public $eventBody;

    public function __construct($eventName, $eventBody)
    {
        $this->eventName = $eventName;
        $this->eventBody = $eventBody;
        Log::debug("Event Create");
    }

}
