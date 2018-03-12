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

Route::get('/', 'PageController@index')->name('main');

Route::get('/gift_card', function(){
	return view('gift_card');
})->name('gift');


Route::get('/currents', function(){
	return view('current');
})->name('currents');

Route::get('/currents/new', function(){
	return view('newcurrent');
})->name('currents.new');

Route::get('/products', function(){
	return view('product');
})->name('product_list');

Route::get('/products/{id}', function(){
	return view('product_detail');
})->name('product_detail');

Route::get('/products/balance/{id}', function(){
	return view('product_balance');
})->name('product.balance');

Route::get('/product/seller/{id}', function(){
	return view('seller');
})->name('product.seller');

Route::get('/payments/credit_card', function(){
	return view('credit_card_payment');
})->name('credit_card');

Route::get('/payments/cash', function(){
	return view('cash_payment');
})->name('cash_payment');

Route::get('/payments/bonus', function(){
	return view('bonus_payment');
})->name('bonus_payment');

Route::get('/payments/doc_payment', function(){
	return view('doc_payment');
})->name('doc_payment');


Route::post('/add_product_to_basket', 'BasketController@addToBasket');
Route::post('/add_current_to_basket', 'BasketController@addCurrentToBasket');
Route::post('/create_new_current', 'CurrentController@create');