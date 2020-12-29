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

/*Route::get('/', function () {
   return view('welcome');
});*/

//FrontEnd
Route::get('/', 'FrontendController@index');
Route::get('/detailproduct/{id}', 'FrontendController@show')->name('detailproduct');
Route::get('/detail', 'LayoutController@index');
Route::resource('shopcart', 'CartController');
Auth::routes();
Route::get('/allproducts', 'FrontendController@allproducts')->name('allproducts');
Route::get('/shirt', 'FrontendController@tshirt')->name('shirt');
Route::get('/jackets', 'FrontendController@jackets')->name('jackets');
Route::get('/bags', 'FrontendController@bags')->name('bags');
Route::get('/invoice', 'CartController@invoice')->name('invoice');
//Route::get('/confirm', 'ConfirmController@form')->name('confirm');
Route::resource('userconf', 'ConfirmController');
Route::resource('payment', 'PaymentController');
Route::get('konfir', 'PaymentController@konf')->name('konfir');
Route::get('detailkonfir/edit/{id}', 'PaymentController@detailkonf')->name('detailkonfir');

//BackEnd
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('categorys', 'CategoryController');
Route::get('/delete/{id}', 'CategoryController@delete');
Route::get('searchcat','CategoryController@search');
Route::resource('product', 'ProductsController');
Route::get('/delete/{id}', 'ProductsController@delete');
Route::get('searchpro', 'ProductsController@search');

//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'customer'], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::post('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CustomerAuth\RegisterController@register');

  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
});
