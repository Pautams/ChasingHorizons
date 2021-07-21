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

Route::get('/main', function(){
    return view('admin.index');
});

Route::get('/cars', function(){
    return view('cars');
});

Route::get('/schedule', function(){
    return view('schedule');
});

Route::resource('drivers',  'DriverController')->middleware('can:manage-all');

Route::resource('transpos', 'TranspoController')->middleware('can:manage-all');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-all')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show','create','store']]);
});

