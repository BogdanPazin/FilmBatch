<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ExportController;

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



//Prikaz svih filmova
Route::get('/', [MovieController::class, 'index']);

//Prikaz forme za kreiranje objave
Route::get('/movies/create', [MovieController::class, 'create'])->middleware('auth');

//Unosenje podataka kreirane objave u bazu
Route::post('/movies', [MovieController::class, 'store'])->middleware('auth');

//Prikaz forme za azuriranje kreirane objave
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->middleware('auth');

//Azuriranje podataka u bazi kreirane objave
Route::put('/movies/{movie}', [MovieController::class, 'update'])->middleware('auth');

//Brisanje kreirane objave
Route::delete('/movies/{movie}', [MovieController::class, 'delete'])->middleware('auth');

//Omogucava prikaz objava korisnika koje je moguce azurirati
Route::get('/movies/manage', [MovieController::class, 'manage'])->middleware('auth');





//Prikaz forme za registraciju korisnika
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

//Unosenje podataka kreiranog korisnika u bazu
Route::post('/users', [UserController::class, 'store']);

//Ulogovani korisnik se odjavljuje
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Prikaz forme za logovanje korisnika
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Proces provere podataka prilikom logovanja
Route::post('/users/authenticate', [UserController::class, 'authenticate']);



//Prikaz dela za admina
Route::get('/admin', [UserController::class, 'admin'])->middleware(['auth', 'role:admin']);

//Unapredjenje ili vracanje uloge na sajtu
Route::put('/users/action/{id}', [UserController::class, 'action'])->middleware(['auth', 'role:admin']);

//Preuzimanje PDF fajla
Route::get('/exportpdf', [ExportController::class, 'export'])->middleware(['auth', 'role:admin']);




//Prikaz pojedinacnog filma
Route::get('/movies/{movie}', [MovieController::class, 'show']);