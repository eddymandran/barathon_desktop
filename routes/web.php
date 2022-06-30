<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// Exemple de route
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return 'Bonjour Admin';
    });
});

/*
|--------------------------------------------------------------------------
| Pro Routes
|--------------------------------------------------------------------------
*/

// Exemple de route
Route::middleware(['auth', 'role:professionnel'])->group(function () {
    Route::get('/pro', function () {
        return 'Bonjour Professionnel';
    });
});

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
// Exemple de route
Route::middleware(['auth', 'role:utilisateur'])->group(function () {
    Route::get('/user', function () {
        return 'Bonjour Utilisateur';
    });
});
