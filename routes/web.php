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
        return view('index');
    })->name('pagee');



/*****************ADMIN ROUTES*******************/
Route::prefix('admin')->middleware('can:admin')->group(function(){
    Route::get('/dashboard', 'Admin\adminController@dashboard')->name('dashboard');

});
/********************ADMIN ROUTES END******************************/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
