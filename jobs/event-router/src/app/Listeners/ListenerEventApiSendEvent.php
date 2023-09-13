<?php

namespace App\Listeners;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ListenerEventApiSendEvent
{
    // use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $connection = 'redis';
    public $queue = 'event.site';

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        Log::debug("Create ListenerEventApiSendEvent");
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Log::debug("handle Event ApiSendEvent");
    }
}
