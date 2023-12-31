<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Users\AdminUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('examples', [\App\Http\Controllers\TestController::class,'test'])->name('test');
Route::get('examples/job', [\App\Http\Controllers\Jobs\ParseDBJobController::class,'startJob'])
    ->name('startJob');
