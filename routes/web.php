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


Route::get('/home', 'ContactController@home');

Route::get('/about', 'ContactController@about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/review', 'ContactController@review')->name('review');


Route::post('/review/check', 'ContactController@review_check');

