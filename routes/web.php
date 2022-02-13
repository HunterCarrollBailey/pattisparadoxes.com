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
    return view('pages/about');
});
Route::get('/products', function () {
    return view('pages/products');
});
Route::get('/portfolio', function () {
    return view('pages/portfolio');
});
Route::get('/blog', function () {
    return view('pages/blog');
});
Route::get('/login', function () {
    return view('pages/login');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
