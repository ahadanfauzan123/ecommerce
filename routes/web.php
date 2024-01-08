<?php

use App\Http\Controllers\KonserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use Database\Seeders\KonserSeeder;
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
    return view('user.user-landingPage');
});
Route::get('/home', function () {
    return view('user.user-dashboard');
});
Route::get('/seller', function () {
    return view('seller.seller-dashboard');
});
Route::get('/admin', function () {
    return view('admin.admin-dashboard');
});
Route::get('/login', function () {
    return view('auth.signIn');
});
Route::get('/register', function () {
    return view('auth.signUp');
});


Route::get('/add-category', function () {
    return view('admin.admin-layout.add-category');
});
Route::get('/add-event', function () {
    return view('admin.admin-layout.add-event');
});
Route::get('/edit-event', function () {
    return view('admin.admin-layout.edit-event');
});
// Route::get('/edit-event/{id}', [EventController::class, "f_edit_event"]);
Route::get('/add-ticket', function () {
    return view('admin.admin-layout.add-ticket');
});
Route::get('/dashboard', function () {
    return view('admin.admin-layout.dashboard');
});

Route::get('/user',[AdminController::class, "kelola_user"]);
Route::get('/event',[AdminController::class, "kelola_event"]);
Route::get('/ticket',[AdminController::class, "kelola_tiket"]);
Route::get('/category',[AdminController::class, "kelola_kategori"]);
Route::get('/transaction',[AdminController::class, "kelola_transaksi"]);
Route::get("/checkout", [KonserController::class, "index"]);
Route::get('/selectInterest', function () {
    return view('auth.selectInterest');
});

Route::post('tambah_event', [EventController::class, "tambah_event"]);
Route::post('ubah_event', [EventController::class, "ubah_event"]);
Route::post('hapus_event', [EventController::class, "hapus_event"]);
