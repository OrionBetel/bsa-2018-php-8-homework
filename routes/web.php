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

Route::get('/currencies', 'CurrenciesController@showAll')
    ->name('currencies');

Route::get('/currencies/{id}', 'CurrenciesController@showParticular')
    ->name('particular-currency');

Route::get('/currencies/add', 'CurrenciesController@add')
    ->name('add-currency');

Route::get('/currencies/{id}/edit', 'CurrenciesController@edit')
    ->name('edit-currency');

Route::get('/currencies/{id}/delete', 'CurrenciesController@delete')
    ->name('delete-currency');
