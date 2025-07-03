<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frond-end.page.index');
});

Route::get('/about', function () {
    return view('frond-end.page.about');
});

Route::get('/layanan-kami', function () {
    return view('frond-end.page.service');
});
