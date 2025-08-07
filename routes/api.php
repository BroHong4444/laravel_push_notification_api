<?php

use App\Http\Controllers\ReportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/send-report', [ReportController::class, 'sendToTelegram']);

Route::get('/hello-laravel', function () {
    Log::info('🔔 POST /hello-laravel hit');

    return response()->json(['message' => "hello laravel app"]);
});

Route::post('/test-post', function (Request $request) {
    Log::info('🔔 POST /test-post hit', ['data' => $request->all()]);

    return response()->json([
        'success' => true,
        'message' => 'POST request received!',
        'data' => $request->all()
    ]);
});
