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

Route::get('', 'indexController@index');
Route::get('transfer','indexController@traduction');
Route::post('send_files','indexController@send_files');
Route::post('action_traduction','indexController@action_traduction');
