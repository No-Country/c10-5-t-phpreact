<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CohortsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\FormRegisterController;
use App\Http\Controllers\Profile\SoftSkillsController;
use App\Http\Controllers\Profile\TechnologyController;


Route::controller(AuthController::class)->group(function () {
    Route::post('/forms-user', 'FormUser');
    Route::get('/register', 'registerGet');
    Route::post('/register', 'registerPost');
    Route::post('/login', 'login');
    Route::post('/forget-password', 'forgetPassword');
    Route::post('/reset-password', 'resetPassword');
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user-profile', 'userProfile');
        Route::get('/logout', 'logout');
    });
});

Route::controller(FormRegisterController::class)->group(function () {
    Route::get('/forms', 'index');
    Route::post('/forms', 'formRegister');
    Route::get('/forms/confirm/{token}', 'confirmRegister')->name('confirmRegister');
});

Route::apiResource('teams', TeamController::class)->names('teams');

Route::apiResource('cohorts', CohortsController::class)->names('cohorts');

Route::apiResource('soft-skills', SoftSkillsController::class)->except(['show'])->names('softSkills');

Route::apiResource('technologies', TechnologyController::class)->except(['show', 'update'])->names('technology');
Route::post('technologies/{id}', [TechnologyController::class, 'update'])->name('technology.update');
