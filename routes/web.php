<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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
Route::get('/', [MyController::class, 'show']);
Route::get('/home', [MyController::class, 'home'])->name('home');
Route::get('/', [MyController::class, 'home'])->name('home');
Route::get('/about', [MyController::class, 'about'])->name('about');
Route::get('/inscrire', [MyController::class, 'inscrire'])->name('inscrire');
Route::get('/tous', [MyController::class, 'tous'])->name('tous');
Route::get('/infra', [MyController::class, 'infra'])->name('infra');
Route::get('/dev', [MyController::class, 'dev'])->name('dev');
Route::get('/gestion', [MyController::class, 'gestion'])->name('gestion');
Route::get('/former', [MyController::class, 'former'])->name('former');
Route::get('/contact', [MyController::class, 'contact'])->name('contact');
Route::get('/equipe', [MyController::class, 'equipe'])->name('equipe');
