<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\RealisationController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/realisation',[RealisationController::class, 'index'])->name('realisation');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
