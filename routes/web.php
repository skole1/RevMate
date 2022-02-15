<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index'])->name('login');
Route::post('/login', [PagesController::class, 'login'])->name('login');




Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
Route::get('/register', [PagesController::class, 'register'])->name('register');
Route::post('/createuser', [PagesController::class, 'createuser'])->name('createuser');

Route::get('/listofUsers', [PagesController::class, 'listofUsers'])->name('listofUsers');
Route::get('/forgotPassword', [PagesController::class, 'forgotPassword'])->name('forgotPassword');
