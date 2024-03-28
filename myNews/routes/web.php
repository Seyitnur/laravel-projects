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

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/news/add', function () {
    return view('add_news');
})->name('add_news');

Route::get('/register', 'RegisterController@register')->name('register');
Route::post('/register_user', 'RegisterController@register_user')->name('register_user');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login_user', 'LoginController@login_user')->name('login_user');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/password', 'PasswordController@password')->name('password');
Route::post('/change_password', 'PasswordController@change_password')->name('change_password');

Route::get('/', 'NewsController@news')->name('News');
Route::get('/news/{id}', 'NewsController@single_news')->name('single_news');
Route::post('/news/save', 'NewsController@save_news')->name('save_news');
