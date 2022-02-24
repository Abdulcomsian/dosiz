<?php

use Illuminate\Support\Facades\Route;
use DB;
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
    $roles = DB::table('roles')->where('name','!=','admin')->get();
        return view('auth.register',compact('roles'));
    })->name('pagee');

/*****************FRONTEND ROUTES*******************/
Route::get('/brand', function () {
        return view('user.home');
});
Route::get('/articleCategory', function () {
    return view('user.article.articleCategory');
});
Route::get('/allArticle', function () {
    return view('user.article.allarticle');
});
Route::get('/detailArticle', function () {
    return view('user.article.articleDetail');
});


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
