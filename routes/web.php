<?php

use App\Notifications\ExampleNotification;
use Illuminate\Support\Facades\Route;
use App\Events\NotifyProcessed;
use App\Http\Controllers\ReportController;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification as FacadesNotification;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
    $token = csrf_token();
});

Route::get('/', function () {
    return view('form');
});

Route::post('/send-report', [ReportController::class, 'sendToTelegram'])->name('sendReport');
