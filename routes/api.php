<?php

use App\Http\Controllers\ReportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
    $token = csrf_token();
});

Route::post('/send-report', [ReportController::class, 'sendToTelegram'])->name('sendReport');
