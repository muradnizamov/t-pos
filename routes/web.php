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

Route::get('/', 'PagesController@retail');

Route::get('/index', function () {
    return view('index');
});

Route::get('/currents', 'PagesController@current')->name('currents');

Route::get('/currents/new', function(){
	return view('newcurrent');
})->name('currents.new');