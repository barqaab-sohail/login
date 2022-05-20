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




Auth::routes();
Route::get('/code','Auth\RegisterController@create')->name('otp.create');
Route::Post('/code','Auth\RegisterController@confirm')->name('otp.confirm');

//PMS Routes
Route::group(['prefix' => 'pms', 'middleware' => ['auth'], 'namespace'=>'pms'], function(){

	Route::get('/dashboard', function () {
    return view('pms.dashboard.dashboard');
	});

});
