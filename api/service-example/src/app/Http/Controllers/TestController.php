<?php

namespace App\Http\Controllers;


use App\Events\EventApiSendEvent;
use App\Http\Requests\TestRequest;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    /**
     * Проверка Request
     * @param TestRequest $request
     * @return string
     */
    public function test(TestRequest $request) {

        $testValue = $request->input("testValue", null);
        Log::debug($testValue);
//        $eventName = "MyEventName";
//        $eventBody = ["data1" => "value1", "data2" => "value2"];
//
//        event(new EventApiSendEvent($eventName, $eventBody));
//        EventApiSendEvent::dispatch($eventName, $eventBody);

//         $job = new \App\Jobs\JobSendEventSite($eventName, $eventBody);
//
//         dispatch($job)
//             ->onConnection('redis')
//             ->onQueue('event.site');


        return "Hello World";
    }

}
