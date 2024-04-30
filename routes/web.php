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

Route::get('/', 'App\Http\Controllers\pageHelper@home');

Route::get('home','App\Http\Controllers\pageHelper@home');
Route::get('about','App\Http\Controllers\pageHelper@about');
Route::get('contact','App\Http\Controllers\pageHelper@contact');
Route::get('list','App\Http\Controllers\pageHelper@list');
Route::get('contactSubmit','App\Http\Controllers\pageHelper@contactSubmit');
