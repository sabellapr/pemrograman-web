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
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/daftar', function () {
    return view('daftar');
});

// controller
Route::get("/tescontroller", "tesController@show");

// resource
Route::resource('siswa', 'SiswaController');

Route::post('data', 'SiswaController@store');

Route::resource('student', 'StudentsController');

Route::post('daftar', 'StudentsController@store');