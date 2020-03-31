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

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/testing', function () {
    return view('dashboard.dashboard1');
});


Auth::routes();
Route::get('/code','Auth\RegisterController@create')->name('otp.create');
Route::Post('/code','Auth\RegisterController@confirm')->name('otp.confirm');


Route::get('/home', 'HomeController@index')->name('home');
