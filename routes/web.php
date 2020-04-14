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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/ristorante', 'RistoranteController@index');
Route::get('/admin/ristorante/edit', 'RistoranteController@edit');
Route::patch('/admin/ristorante/{ristorante}', 'RistoranteController@update');

Route::get('/admin/allergie', 'AllergiesController@index');
Route::get('/admin/allergie/create', 'AllergiesController@create');
Route::get('/admin/allergie/{allergy}/edit', 'AllergiesController@edit');
Route::put('/admin/allergie/{allergy}', 'AllergiesController@update');
Route::delete('/admin/allergie/{allergy}', 'AllergiesController@destroy');
Route::post('/admin/allergie', 'AllergiesController@store');

Route::get('/admin/diete', 'DietsController@index');
Route::get('/admin/diete/create', 'DietsController@create');
Route::get('/admin/diete/{diet}/edit', 'DietsController@edit');
Route::put('/admin/diete/{diet}', 'DietsController@update');
Route::delete('/admin/diete/{diet}', 'DietsController@destroy');
Route::post('/admin/diete', 'DietsController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


