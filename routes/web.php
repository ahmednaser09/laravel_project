<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\OurteamController;
use App\Http\Controllers\OurtripcrudsController;
use App\Http\Controllers\OurtripsController;
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

Route::get('/dashboard', function () {
    return view('dashboard.layout.mainBody');
});
Route::get('/charts', function () {
    return view('dashboard.layout.charts');
});

Route::get('/our', function () {
    return view('dashboard.layout.ourtripcrud.create');
});

Route::resource('ourtrips',OurtripsController::class);

Route::resource('tripcruds',OurtripcrudsController::class);

Route::resource('booknows', BookingController::class);

Route::resource('ourteams', OurteamController::class);