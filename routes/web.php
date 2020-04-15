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


Route::prefix('/admin/')->group(function () {
    Route::get('', function () {
        return view('admin.index');
    });

    Route::get('ristorante', 'RistoranteController@index');
    Route::get('ristorante/edit', 'RistoranteController@edit');
    Route::patch('ristorante/{ristorante}', 'RistoranteController@update');


    Route::get('allergie', 'AllergiesController@index');
    Route::get('allergie/create', 'AllergiesController@create');
    Route::get('allergie/{allergy}/edit', 'AllergiesController@edit');
    Route::put('allergie/{allergy}', 'AllergiesController@update');
    Route::delete('allergie/{allergy}', 'AllergiesController@destroy');
    Route::post('allergie', 'AllergiesController@store');

    Route::get('diete', 'DietsController@index');
    Route::get('diete/create', 'DietsController@create');
    Route::get('diete/{diet}/edit', 'DietsController@edit');
    Route::put('diete/{diet}', 'DietsController@update');
    Route::delete('diete/{diet}', 'DietsController@destroy');
    Route::post('diete', 'DietsController@store');

    Route::get('ristorante_piatti', 'RistoranteDishesController@index');
    Route::get('ristorante_piatti/create', 'RistoranteDishesController@create');
    Route::post('ristorante_piatti', 'RistoranteDishesController@store');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


