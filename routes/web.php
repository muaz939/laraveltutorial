<?php

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


Route::get('/auth',"AuthController@index")->name('auth.login');
Route::get('/signup',"AuthController@register")->name('auth.signup');
Route::post('/signup',"AuthController@store")->name('auth.register');
