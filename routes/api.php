<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmergencieController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\SiteController;
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
    Route::resource('sites', SiteController::class)->only(['store', 'show', 'update', 'destroy']);
    Route::resource('projets', ProjetController::class)->only(['index', 'show', 'update', 'destroy']);
    Route::resource('incidents', IncidentController::class);
    Route::resource('emergencies', EmergencieController::class);
    Route::resource('documents', DocumentController::class);
});
Route::resource('risks', RiskController::class);
Route::resource('tasks', TaskController::class)->only(['index']);
