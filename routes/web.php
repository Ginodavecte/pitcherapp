<?php

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

//Shopping cart page
Route::get('/shopcart', function(){
  return view('/shopcart');
});
//AdminPage(Product Management)
Route::get('/adminPM', function(){
  return view('/admin/product-management');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/categories', 'MainCategoryController');
Route::resource('/products', 'ProductController');

Route::resource('/contact', 'ContactController');

Route::get('/billingdata', function () {
    return view('billingdata');
});

Route::get('/profile', function () {
    return view('/account/profile');
});

Route::get('/orders', function () {
    return view('/account/orders');
});
Route::get('/wishlist', function () {
    return view('/account/wishlist');
});

Route::get('/orders', function () {
    return view('/account/orders');
});
