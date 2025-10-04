<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SetLocale;

Route::get('/', [HomeController::class, 'index']);
Route::get('/lang/{locale}', [HomeController::class, 'switchLang']) ->name('switch.lang')
    ->where('locale', 'en|ar');

