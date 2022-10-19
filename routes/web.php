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
Route::prefix('private')->group(function (){
    Auth::routes();
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/', function () {
            return view('welcome');
        });
    });
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
});



//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();


//Auth::routes(['login' => false,'register' => false]);


//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

//Route::get('/register',[App\Http\Controllers\Auth\LoginController::class], 'showRegistrationForm')->name('register');
// Route::post('login', 'Auth\LoginController@login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::middleware(['auth'])->
