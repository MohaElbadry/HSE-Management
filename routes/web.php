<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
//home page
Route::get('/home', function () {
    return view('welcome');
})->name('home');
//redirect to the home page named welcome
Route::get('/', function () {
    return view('welcome');
})->name('home');

/* This code block defines the authentication routes for the application. It specifies that the
`LoginController` should handle the login and logout routes, and the `RegisterController` should
handle the registration routes. The `guest` middleware is used to ensure that only non-authenticated
users can access the login and registration pages. The `name` method is used to give a name to each
route, which can be used to generate URLs or redirect to specific pages. Finally, the `logout` route
is defined separately as a `POST` request to the `LoginController`'s `logout` method. */
// Authentication routes
Route::middleware('guest')->group(function () {
    // Login Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login');

    // Registration Routes
    //when the user register its auto redirect to the login page to see his role
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});
// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/* This code block defines a group of routes that require authentication. The
`Route::middleware('auth')` method specifies that the routes in the group can only be accessed by
authenticated users. The group includes several resource routes for controllers such as
`UserController`, `SiteController`... Additionally, there are three PDF routes for generating PDF files for
risks, projets, and a global PDF. */
Route::middleware('auth')->group(function () {
    // Routes that require authentication
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

    // PDF routes
    Route::get('risks-pdf', [RiskController::class, 'pdf']);
    Route::get('projets-pdf', [ProjetController::class, 'pdf']);
    Route::get('pdf_Globale', [ProjetController::class, 'Global_Pdf']);
});



Auth::routes();
