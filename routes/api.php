<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CohortsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Team\TeamController;
use App\Http\Controllers\Auth\FormRegisterController;
use App\Http\Controllers\Profile\SoftSkillsController;
use App\Http\Controllers\Profile\TechnologyController;
use App\Http\Controllers\Profile\EnglishLevelController;


Route::controller(AuthController::class)->group(function () {
    Route::post('forms-user', 'FormUser');
    Route::get('register', 'registerGet');
    Route::post('register', 'registerPost');
    Route::post('login', 'login');
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('user-profile', 'userProfile');
        Route::get('logout', 'logout');
        Route::post('resetPassword', 'resetPassword');
    });
});

Route::controller(FormRegisterController::class)->group(function () {
    Route::get('forms', 'index');
    Route::post('forms', 'formRegister');
    Route::get('forms/confirm/{token}', 'confirmRegister')->name('confirmRegister');
});

Route::group([], function () {
    Route::apiResource('teams', TeamController::class);
});

Route::group([], function () {
    Route::apiResource('cohorts', CohortsController::class);
});


Route::controller(SoftSkillsController::class)->group(function () {
    Route::post('/soft-skill', 'store')->name('softSkill.store');
    Route::put('/soft-skill/{id}', 'update')->name('softSkill.update');
    Route::delete('/soft-skill/{id}', 'delete')->name('softSkill.delete');
});

Route::controller(TechnologyController::class)->group(function () {
    Route::get('/technologies', 'index')->name('technology.index');
    Route::post('/technologies', 'store')->name('technology.store');
    Route::post('/technology/{id}', 'update')->name('technology.update');
    Route::delete('/technology/{id}', 'delete')->name('technology.delete');
});

Route::controller(EnglishLevelController::class)->group(function () {
    Route::post('/english-level', 'store')->name('englishLevel.store');
    Route::put('/english-level/{id}', 'update')->name('englishLevel.update');
    Route::delete('/english-level/{id}', 'delete')->name('englishLevel.delete');
});