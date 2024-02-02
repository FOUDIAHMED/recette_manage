<?php

use App\Http\Controllers\RecetteController;
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
// Route::post('/login', [UserController::class, 'login'])->name('login');
// Route::post('/LoginShow', [UserController::class, 'LoginShow'])->name('LoginShow');

Route::get('/register', [UserController::class, 'register']);
Route::get('/', [RecetteController::class, 'Afficher_all'])->name('recettes.all');

Route::get('/recettes/{id}', [RecetteController::class, 'Afficher_detail'])
->where('id', '\d+')
->name('AfficherDetail')
;

Route::get('/search', [RecetteController::class , 'search']);

Route::resources(['recettes' => RecetteController::class]);
Route::resource('recettes', RecetteController::class);