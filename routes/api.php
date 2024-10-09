<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\MyAuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/shift/{student_id}', [ShiftController::class, 'show']);

Route::post('/shift_csv', [ShiftController::class, 'store'])->middleware('auth:sanctum');

Route::get('/hello', [MyAuthController::class, 'hello'])->middleware('auth:sanctum');


Route::controller(MyAuthController::class)->group(function () {
    Route::post('login', 'login');
});
