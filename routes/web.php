<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SetLocale;
use App\Http\Controllers\InterestController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/lang/{locale}', [HomeController::class, 'switchLang']) ->name('switch.lang')
    ->where('locale', 'en|ar');
Route::get('/usage.blade.php', function () {
    return view('usage');
})->name('usage.policies');
Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('privacy.policy');

Route::post('/register-interest', [InterestController::class, 'store'])->name('interest.store');

