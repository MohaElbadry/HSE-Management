<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmergencieController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SensibilisationController;
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


Route::post('register', [PassportController::class, 'register']);
Route::post('login', [PassportController::class, 'login']);



Route::middleware(['auth:api'])->group(function () {
    Route::get('userinfo', [PassportController::class, 'userinfo']);
    Route::resource('projets', ProjetController::class)->only(['index', 'show',]);
    Route::resource('incidents', IncidentController::class)->only(['index', 'store']);
    Route::resource('emergencies', EmergencieController::class)->only(['index', 'store']);
    Route::resource('users_lists', UsersListTaskController::class)->only(['index', 'show']);
    Route::resource('risks', RiskController::class)->only(['index', 'store']);
    Route::resource('tasks', TaskController::class)->only(['index']);
    Route::resource('sensibilisations', SensibilisationController::class)->only(['index', 'store']);
});
