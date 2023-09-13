<?php

namespace App\Http\Controllers;


use App\Events\EventApiSendEvent;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function test() {
        $eventName = "MyEventName";
        $eventBody = ["data1" => "value1", "data2" => "value2"];

        event(new EventApiSendEvent($eventName, $eventBody));
        EventApiSendEvent::dispatch($eventName, $eventBody);

//         $job = new \App\Jobs\JobSendEventSite($eventName, $eventBody);
//
//         dispatch($job)
//             ->onConnection('redis')
//             ->onQueue('event.site');


        return "Hello World";
    }

}
