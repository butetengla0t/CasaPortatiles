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
    return view('index');
});
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index');

Route::get('/windows', function () {
    return view('windows');
});
Route::get('/windows', 'App\Http\Controllers\WindowsController@index')->name('windows');

Route::get('/mac', function () {
    return view('mac');
});
Route::get('/mac', 'App\Http\Controllers\MacController@index')->name('mac');

Route::get('/android', function () {
    return view('android');
});
Route::get('/android', 'App\Http\Controllers\AndroidController@index')->name('android');

Route::get('/ios', function () {
    return view('ios');
});
Route::get('/ios', 'App\Http\Controllers\iOSController@index')->name('ios');
