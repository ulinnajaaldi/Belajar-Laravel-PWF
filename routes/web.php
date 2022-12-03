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

Route::get('/nim', function () {
    return view('nim');
});

Route::get('/views', function () {
    return view('views');
});

Route::get('/views/mahasiswa', function () {
    return view('datas.mahasiswa');
});

Route::get('/views/dosen', function () {
    return view('datas.dosen');
});

Route::get('/views/galery', function () {
    return view('datas.galery');
});
