<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TweetsController;
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


Route::get('/',  [HomeController::class, 'showHome'])->name('home');
Route::get('/profile',  [HomeController::class, 'showProfile'])->name('profile');

///**
// * routes for registration and auth
// */
//Route::get('/register',  [RegistrationController::class, 'create'])->name('register');
//Route::post('/process_registration',  [RegistrationController::class, 'processRegistration'])->name('register.process');
//Route::get('/login',  [RegistrationController::class, 'create'])->name('login');
//
///**
// * routs for tweets
// */
//Route::get('/tweets', [TweetsController::class, 'tweets'])->name('tweets');
//Route::get('/tweets/create', [TweetsController::class, 'createTweet'])->name('tweets.create');
//Route::post('/tweets/create', [TweetsController::class, 'postTweet'])->name('tweets.post');
