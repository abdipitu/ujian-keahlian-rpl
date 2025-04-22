<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArtikelController::class, 'index'])->name('index');
Route::get('/create', [ArtikelController::class, 'create'])->name('create');
Route::post('/store', [ArtikelController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ArtikelController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ArtikelController::class, 'update'])->name('update');
Route::get('/destroy/{id}', [ArtikelController::class, 'destroy'])->name('destroy');
