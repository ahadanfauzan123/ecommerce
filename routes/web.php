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
    return view('user.user-dashboard');
});
Route::get('/seller', function () {
    return view('seller.seller-dashboard');
});
Route::get('/admin', function () {
    return view('admin.admin-dashboard');
});