<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransportasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.mainLayout');
});
Route::get('/dashboard', function () {
    return view('welcome');
});



Route::get("/paket", [PaketController::class, 'view'])->name('paket.view');
Route::get("/hotel", [HotelController::class, 'view'])->name('hotel.view');
Route::get("/destinasi", [DestinasiController::class, 'view'])->name('destinasi.view');
Route::get("/transportasi", [TransportasiController::class, 'view'])->name('destinasi.view');
