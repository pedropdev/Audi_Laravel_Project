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



// homepage
Route::get('/', function () {
    return view('pages.homepage');
});
Route::get('home', 'AudiPageController@home');
Route::get('gallery', 'AudiPageController@gallery');
Route::get('blog', 'AudiPageController@blog');
Route::get('contact-us', 'AudiPageController@contactus');


