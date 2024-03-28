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
    return view('onePage');
})->name('onePage');

Route::get('/twoPage', function () {
    return view('twoPage');
})->name('twoPage');

Route::get('/country/add', function () {
    return view('add_country');
})->name('add_country');

Route::post('/country/save', 'CountryController@save_country')->name('save_country');
Route::get('/country/list', 'CountryController@country_list')->name('country_list');
