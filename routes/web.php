<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AspirasiFileController;


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/aspirasi/create', function () {
    return view('aspirasi.create');
})->middleware('auth');


Route::get('/aspirasi/create', [AspirasiFileController::class, 'create']);
Route::post('/aspirasi', [AspirasiFileController::class, 'store'])->name('aspirasi.store');
Route::get('/aspirasi', [AspirasiFileController::class, 'index']);
Route::get('/peta', [AspirasiFileController::class, 'map']);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('aspirasi')->group(function () {
    Route::get('/', [AspirasiFileController::class, 'index'])->name('aspirasi.index');
    Route::get('/create', function () {
        return view('aspirasi.create');
    })->name('aspirasi.create');
    Route::post('/', [AspirasiFileController::class, 'store'])->name('aspirasi.store');
});


