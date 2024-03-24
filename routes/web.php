<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\PaiementController;
use App\Http\Middleware\Authenticate; // Exemple de middleware
use App\Models\User;

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
// Routes pour les utilisateurs



// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// returns the home page with all users
Route::get('/', UserController::class . '@index')->name('users.index')->middleware('web');
// returns the form for adding a user
Route::get('/users/create', UserController::class . '@create')->name('users.create');
// adds a user to the database
Route::post('/users.store', UserController::class . '@store')->name('users.store');
// returns a page that shows a full user
Route::get('/users/{user}', UserController::class . '@show')->name('users.show');
// updates a user
Route::put('/users/{user}', UserController::class . '@update')->name('users.update');
// deletes a user
Route::delete('/users/{user}', UserController::class . '@destroy')->name('users.destroy');


// Pour le Pointage Controller
Route::get('/pointage', PointageController::class . '@index')->name('pointages.index')->middleware('web');
Route::get('/pointage/create', PointageController::class . '@create')->name('pointages.create');
// adds a user to the database
Route::post('/pointage.store', PointageController::class . '@store')->name('pointages.store');


// PAIEMENT CONTROLLER 
Route::get('/paiement', PaiementController::class . '@index')->name('paiements.index')->middleware('web');
// returns the form for adding a user
Route::get('/paiement/create', PaiementController::class . '@create')->name('paiements.create');
// adds a user to the database
Route::post('/paiement.store', PaiementController::class . '@store')->name('paiements.store');
// returns a page that shows a full user
Route::get('/paiement/{paiement}', PaiementController::class . '@show')->name('paiements.show');
// updates a user
Route::put('/paiement/{paiement}', PaiementController::class . '@update')->name('paiements.update');
// deletes a user
Route::delete('/paiement/{paiement}', PaiementController::class . '@destroy')->name('paiements.destroy');
