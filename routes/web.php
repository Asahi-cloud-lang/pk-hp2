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

Route::get('/', 'TopController@index');

Route::get('/freelance', function () {
    return view('./pages/freelance');
});

Route::get('/company', function () {
    return view('./pages/company');
});

Route::post('/contact', 'ContactController@send');
