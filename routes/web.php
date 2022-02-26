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

/*****************FRONTEND ROUTES*******************/
Route::get('/register', function () {
    return view('auth.register');
});
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
Route::get('/productCatalogue', function () {
    return view('user.product.productCatalogue');
});
Route::get('/productDetail', function () {
    return view('user.product.productDetail');
});


/*****************ADMIN ROUTES*******************/
Route::prefix('dashboard')->middleware('dashboard')->group(function(){
    Route::get('/dashboard', 'dashboardController@index')->name('dashboard');
    Route::get('/get_sub_category/{id}', 'productController@get_sub_category');

    //category
    Route::resource('/category', 'categoryController');
    //product
    Route::resource('/product', 'productController');
    //blog
    Route::resource('/blog', 'BlogController');  

    //blog
    Route::resource('/brand_profile', 'BrandProfileController');

});
/********************ADMIN ROUTES END******************************/


/*****************ADMIN ROUTES*******************/
Route::prefix('admin')->middleware('can:admin')->group(function(){
    //category
    Route::resource('/sub_category', 'Admin\SubCategoryController');
    
    //category
    Route::resource('/city', 'Admin\CityController');

});
/********************ADMIN ROUTES END******************************/

/*****************Brand Manager ROUTES*******************/
Route::prefix('brand')->middleware('can:brand')->group(function(){

});
/********************Brand Manager ROUTES END******************************/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
