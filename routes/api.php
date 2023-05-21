<?php

use App\Http\Controllers\EmergencieController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SensibilisationController;
use App\Http\Controllers\UsersListTaskController;
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



/* This code block defines a group of routes that require authentication and a specific role to access.
*The middleware `auth:api` checks if the user is authenticated  And
*`role` middleware checks if the Role=>User for the mobile interface
*user has the required role. If the user is authenticated and has the required role, they can access
*the routes defined in the group. */
Route::middleware(['auth:api', 'role'])->group(function () {
    Route::resource('sites', SiteController::class)->only(['index', 'show',]);
    Route::get('userinfo', [PassportController::class, 'userinfo']);
    Route::resource('projets', ProjetController::class)->only(['index', 'show',]);
    Route::resource('incidents', IncidentController::class)->only(['index', 'store']);
    Route::resource('emergencies', EmergencieController::class)->only(['index', 'store']);
    Route::resource('risks', RiskController::class)->only(['index', 'store']);
    Route::resource('tasks', TaskController::class)->only(['index']);
    Route::resource('sensibilisations', SensibilisationController::class)->only(['index', 'store']);
    Route::resource('users_lists', UsersListTaskController::class)->only(['index', 'show']);
});
