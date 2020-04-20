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


Auth::routes();

Route::get('/vendeur/{id}', 'InfosController@Add');

Route::get('/','PostController@GetAll');

Route::get('/profile', 'InfosController@GetInfo');
Route::post('renseigner','InfosController@save');
Route::post('carte','cartebController@save');

Route::view('/vendre/formulairevente','formulairevente');

Route::get('/post', 'AchatsController@GetPost');
Route::get('/post/bonpourlemusée', 'AchatsController@GetMusee');
Route::get('/post/vip', 'AchatsController@GetVip');
Route::get('/post/ferraille', 'AchatsController@GetFeraille');
Route::get('/post/ajout/{title}', 'AchatsController@ajout');
Route::get('/panier', 'AchatsController@GetPanier');
Route::get('supprimer', 'AchatsController@suppression');
Route::get('/panier/payement', 'AchatsController@PrixTotal');
Route::get('/post/{title}','AchatsController@GetSinglepost');
Route::post('/post/{title}','AchatsController@modifEnchere');
Route::post('/post/offres/{title}/{nbNego}','AchatsController@modifNego');
Route::post('/post/offre/{title}','AchatsController@save');
Route::get('/post/offres/{title}','AchatsController@GetOffre');

Route::get('/admin','PostController@GetAdmin')->name('admin')->middleware('admin');
Route::get('/vendre','PostController@GetVente')->name('vendeur')->middleware('vendeur');

Route::post('/vendre/submit','PostController@save');
Route::get('/delete/{id_post}','PostController@delete');
Route::get('/supprimer/{id}','PostController@deleteUser');
Route::get('/edit/{id_post}','PostController@edit');
Route::get('/{id}','PostController@editUser');
Route::post('edit','PostController@update');
Route::post('/modifier/{id}','PostController@updateUser');
Route::get('admin','PostController@GetAdmin');



//Route::get('post','AchatsController@timer');

