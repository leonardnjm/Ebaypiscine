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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/profile', 'InfosController@GetInfo');
Route::post('/profile','InfosController@save');


Route::get('/test',function() {

return view('test');
});

//test formulaire
Route::view('formulaire','userview');

Route::get('/post', 'PostController@GetPost');
Route::get('/post/bonpourlemusée', 'PostController@GetMusee');
Route::get('/post/vip', 'PostController@GetVip');
Route::get('/post/ferraille', 'PostController@GetFeraille');

Route::post('submit','PostController@save');

Route::get('/post/{title}','PostController@GetSinglepost');


Route::post('/profile2','cartebController@save');

