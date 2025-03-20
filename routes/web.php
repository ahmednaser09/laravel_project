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

Route::get('/about', function () {
    return view('aboutUs');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/ourteam', function () {
    return view('ourteam');
});
Route::get('/contact', function () {
    return view('contactus');
});
Route::get('/ourtrip', function () {
    return view('ourtrip');
});

Route::get('/singletor', function () {
    return view('singletor');
});