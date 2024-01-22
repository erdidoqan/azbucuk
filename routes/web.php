<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/hakkimizda', [HomeController::class, 'about'])->name('about');
Route::get('/sartlar-ve-kosullar', [HomeController::class, 'tos'])->name('tos');
Route::get('/gizlilik-politikasi', [HomeController::class, 'gp'])->name('gp');
Route::get('/bize-ulasin', [HomeController::class, 'contact'])->name('contact');


Route::get('/yazar/{slug?}', [HomeController::class, 'author']);
Route::get('/{categorySlug}/{postSlug?}', [HomeController::class, 'page'])->name('detail');
