<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CohortsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\FormRegisterController;


// Route::post('register', [AuthController::class, 'register']);
// Route::post('login', [AuthController::class, 'login']);

// Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::get('user-profile', [AuthController::class, 'userProfile']);
//     Route::get('logout', [AuthController::class, 'logout']);
// });



Route::get('forms', [FormRegisterController::class, 'index']);
Route::post('forms', [FormRegisterController::class, 'formRegister']);


Route::group([], function () {
    Route::apiResource('cohorts', CohortsController::class);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
