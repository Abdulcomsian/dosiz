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
Route::prefix('dashboard')->middleware('dashboard')->group(function(){
    Route::get('/dashboard', 'dashboardController@index')->name('dashboard');

    //category
    Route::resource('/category', 'categoryController');
    //product
    Route::resource('/product', 'productController');

});
/********************ADMIN ROUTES END******************************/


/*****************ADMIN ROUTES*******************/
Route::prefix('admin')->middleware('can:admin')->group(function(){

});
/********************ADMIN ROUTES END******************************/

/*****************Brand Manager ROUTES*******************/
Route::prefix('brand')->middleware('can:brand')->group(function(){

});
/********************Brand Manager ROUTES END******************************/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
