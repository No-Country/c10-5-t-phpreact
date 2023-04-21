<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TlController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CohortsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\TeamCalificationController;
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
});

Route::controller(ProfileController::class)->group(function () {
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user-profile', 'userProfile');
        Route::get('/logout', 'logout');
    });
    Route::get('/user-only/{id}', 'userOnly')->name('userOnly');
    Route::get('/user-all', 'userAll')->name('userAll');
});

Route::get('tls', [TlController::class, 'index']);

Route::controller(TeamCalificationController::class)->group(function () {
    Route::get('/team-calification', 'getTeamCalification');
    Route::post('/team-calification', 'postTeamCalification');
    Route::get('/rating-user', 'searchRatingUser');
    Route::get('/rating-team/{id}', 'ratingTeamCalifification')->name('ratingTeamCalifification'); // no esta bien aun
    Route::put('/rating-team/{teamRating}', 'editTeamCalification')->name('editTeamCalification');
});

Route::controller(FormRegisterController::class)->group(function () {
    Route::get('/forms/{id}', 'formsOnly')->name('formsOnly');
    Route::get('/forms', 'dateForms');
    Route::post('/forms-register', 'formRegister');
    Route::get('/forms-all', 'formsAll')->name('formsAll');
});

Route::apiResource('teams', TeamController::class)->names('teams');

Route::apiResource('cohorts', CohortsController::class)->names('cohorts');

Route::apiResource('soft-skills', SoftSkillsController::class)->except(['show'])->names('softSkills');

Route::apiResource('technologies', TechnologyController::class)->except(['show', 'update'])->names('technology');
Route::post('technologies/{id}', [TechnologyController::class, 'update'])->name('technology.update');
