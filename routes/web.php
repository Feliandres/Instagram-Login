<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ReportController;

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

Route::get('/', [pageController::class, 'welcome'])->name('welcome');

Route::get('/register', [pageController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class,'registerUser']);

Route::get('/login', [pageController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class,'login']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::resource('report',ReportController::class);
Route::get('/report',[ReportController::class, 'index'])->name('report');


Route::get('insta/login', 'SocialController@redirectToInstagramProvider')->name('insta.login');
Route::get('instagram', 'SocialController@instagramProviderCallback')->name('insta.login.instagram');