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
Route::post('/profile2','cartebController@save');

Route::view('formulairevente','formulairevente');

Route::get('/post', 'AchatsController@GetPost');
//Route::get('/enchère', 'AchatsController@GetPost');
Route::get('/post/bonpourlemusée', 'AchatsController@GetMusee');
Route::get('/post/vip', 'AchatsController@GetVip');
Route::get('/post/ferraille', 'AchatsController@GetFeraille');
Route::get('/panier', 'AchatsController@GetPanier');
Route::get('/post/{title}','AchatsController@GetSinglepost');

Route::get('/vendre','PostController@GetVente');
Route::post('submit','PostController@save');
Route::get('/delete/{id}','PostController@delete');
Route::get('/edit/{id}','PostController@edit');
Route::post('edit','PostController@update');

