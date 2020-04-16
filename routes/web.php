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

Route::get('/post', 'PostController@GetPost');


Route::get('/test',function() {

return view('test');
});
Route::get('/devices','DevicesController@index');
 
Route::get('/devices/create','DevicesController@create');
 
Route::post('/devicesaction','DevicesController@storeDevice');


//test formulaire
Route::view('formulaire','userview');


route::post('submit','Ventes@save');