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

##------------------------Login Route----------------------------------------##
Route::get('/', [PagesController::class, 'index'])->name('login');
Route::post('/login', [PagesController::class, 'login'])->name('post.login');
Route::post('/logout', [PagesController::class, 'logout'])->name('post.logout');


##------------------------Dashboard Route----------------------------------------##
Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
Route::get('/register', [PagesController::class, 'register'])->name('register');
Route::post('/createuser', [PagesController::class, 'createuser'])->name('createuser');

Route::get('/listofUsers', [PagesController::class, 'listofUsers'])->name('listofUsers');
Route::get('/forgotPassword', [PagesController::class, 'forgotPassword'])->name('forgotPassword');

##------------------------Dashboard Route----------------------------------------##
Route::get('/wallet', [PagesController::class, 'wallet'])->name('wallet');

##------------------------Report Route----------------------------------------##
Route::get('/report', [PagesController::class, 'report'])->name('report');

##------------------------Profile Route----------------------------------------##
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');
Route::get('/setting', [PagesController::class, 'setting'])->name('setting');
Route::get('/slip', [PagesController::class, 'slip'])->name('slip');
