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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/murid', 'SiswaController@index')->middleware('auth');
// resource
Route::resource('siswa', 'SiswaController');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postlogin')->name('postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/data', 'SiswaController@create');
    Route::post('data', 'SiswaController@store');
    Route::get('/murid/{id}edit', 'SiswaController@edit')->name('editData');
    Route::post('/murid/{id}/update', 'SiswaController@update')->name('updateData');
    Route::get('/murid/view', 'SiswaController@index')->name('viewData');
    Route::get('/murid/{id}/delete', 'SiswaController@destroy')->name('deleteData');
    
});