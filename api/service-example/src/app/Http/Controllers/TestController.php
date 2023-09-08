<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function test() {
        $eventName = "MyEventName";
        $eventBody = ["data1" => "value1", "data2" => "value2"];

        $job = new \App\Jobs\JobSendEventSite($eventName, $eventBody);

        // Log::debug("JobId: " . $job->job->getJobId());

        dispatch($job)->onConnection('redis')->onQueue('event.site');
        return "Hello World";
        // Storage::disk('minio')->put('avatars/1.txt', 'test');
        // Storage::put('posts/1/test.txt', 'test');
        // return env('MINIO_USER', 'Нет такой переменной');
    }

}
