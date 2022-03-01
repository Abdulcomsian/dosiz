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
        return view('auth.register');
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
    Route::get('/get_sub_category/{id}', 'productController@get_sub_category');
    //category
    Route::resource('/category', 'categoryController');
    //sub-category
    Route::resource('/sub_category', 'SubCategoryController');
    //product
    Route::resource('/product', 'productController');
    //blog
    Route::resource('/blog', 'BlogController');  
    //blog
    Route::resource('/brand_profile', 'BrandProfileController');
    //blog
    Route::resource('/subscribe', 'EmailSubscribeController');

    Route::get('/export/', 'EmailSubscribeController@export');

    //brand-category
    Route::resource('/p_category', 'ProductCategoryController');

});
/********************ADMIN ROUTES END******************************/


/*****************ADMIN ROUTES*******************/
Route::prefix('admin')->middleware('can:admin')->group(function(){
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

Route::get('/brand_profile_id/{id}', 'BrandProfileController@brand_profile')->name('brand_profile_id');
Route::post('/subscriber', 'EmailSubscribeController@store')->name('subscriber.store');
Route::get('/products/{id}', 'BrandProfileController@products')->name('brand_profile_id');
Route::get('/blogs/{id}', 'BrandProfileController@blogs')->name('blogs');  //by city next task
Route::get('/blog/{id}', 'BrandProfileController@blog')->name('blog'); 
Route::get('/article/{id}', 'BrandProfileController@article')->name('article'); 
Route::get('/articles/{id}', 'BrandProfileController@articles')->name('articles'); 
