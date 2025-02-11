<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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


Route::get('/qrcode', [QRCodeController::class, 'generateQRCode']);


Route::get('/', function () {
    return view('home.index');
});

Route::get('/about', function () {
    return view('home.about'); // Menampilkan about.blade.php
});

Route::get('/gallery', function () {
    return view('home.gallery'); // Menampilkan gallery.blade.php
});

Route::get('/contact', function () {
    return view('home.contact'); // Menampilkan gallery.blade.php
});