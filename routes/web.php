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
Route::get('/sample', function(){
return view('page.sample');
});

Route::get('/',       'PagesController@index');
Route::get('/about',   'PagesController@about');
Route::get('/feedback', 'PagesController@create');
Route::post('/feedback', 'PagesController@store');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/services', 'PagesController@services');
Route::get('/blogs',    'PagesController@blogs');
Route::get('/contact',  'PagesController@contact');


