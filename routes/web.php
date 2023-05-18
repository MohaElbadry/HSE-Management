<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmergencieController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\SensibilisationController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UsersListTaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('php');
});


Route::resource('users', UserController::class);
Route::resource('sites', SiteController::class);
Route::resource('projets', ProjetController::class);
Route::resource('risks', RiskController::class);
Route::resource('incidents', IncidentController::class);
Route::resource('emergencies', EmergencieController::class);
Route::resource('documents', DocumentController::class);
Route::resource('tasks', TaskController::class);
Route::resource('users_lists', UsersListTaskController::class);
Route::resource('sensibilisations', SensibilisationController::class);

/*
*PDF ROUTES
*/
Route::get('risks-pdf', [RiskController::class, 'pdf']);
Route::get('projets-pdf', [ProjetController::class, 'pdf']);
Route::get('pdf_Globale', [ProjetController::class, 'Global_Pdf']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
