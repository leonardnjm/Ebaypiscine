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

Route::post('/upload',"ImagesController@index");

Auth::routes();

Route::get('/profile', 'InfosController@GetInfo');
Route::post('renseigner','InfosController@save');
Route::post('carte','cartebController@save');

Route::view('/vendre/formulairevente','formulairevente');

Route::get('/post', 'AchatsController@GetPost');
Route::get('/enchère', 'AchatsController@GetPost');
Route::get('/post/bonpourlemusée', 'AchatsController@GetMusee');
Route::get('/post/vip', 'AchatsController@GetVip');
Route::get('/post/ferraille', 'AchatsController@GetFeraille');
Route::get('/panier', 'AchatsController@GetPanier');
Route::get('/post/{title}','AchatsController@GetSinglepost');

Route::get('/vendre','PostController@GetVente');
Route::post('/vendre/submit','PostController@save');
Route::get('/delete/{id}','PostController@delete');
Route::get('/edit/{id}','PostController@edit');
Route::post('edit','PostController@update');

