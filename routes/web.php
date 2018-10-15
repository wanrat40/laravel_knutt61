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

Route::get('hello', function(){
    return 'Hello Laravel';
});

Route::get('welcome/hello','WelcomeController@hello');
//Route::get('welcome/page/{id?}', 'WelcomeController@page');
Route::get('welcome/page/{id?}/{title?}',
    'WelcomeController@page')
    ->where(['id'=>'[0-9]+', 'title'=>'[a-zA-Z]+']);


Route::get('bangkok','BangkokController@index');

/************************************************
                Article Controller
 ************************************************/
Route::resource('articles','ArticleController');

/************************************************
                Page Controller
 ************************************************/
Route::get('pages/about', 'PageController@about');
Route::get('pages/contact', 'PageController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
