<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SetLocale;
use App\Http\Controllers\InterestController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\SeenNewsletterController;

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
Route::post('/seen-subscribe', [SeenNewsletterController::class, 'subscribe'])->name('seen.subscribe');

// مسار الأرشيف (قائمة المقالات)
Route::get('/seen-articles', [SeenNewsletterController::class, 'index'])->name('seen.index');

// مسار المقال المنفرد (هذا هو السطر الذي يحل المشكلة)
Route::get('/seen-article/{slug}', [SeenNewsletterController::class, 'show'])->name('seen.show');




Route::get('/fix-storage', function () {
    try {
        // محاولة إنشاء الرابط باستخدام أمر لارايفل
        Artisan::call('storage:link');
        return "تم إنشاء رابط التخزين بنجاح!";
    } catch (\Exception $e) {
        // إذا فشل الأمر، سنحاول يدوياً باستخدام دالة PHP
        $target = storage_path('app/public');
        $link = public_path('storage');
        
        if (file_exists($link)) {
            return "الرابط موجود بالفعل أو المجلد موجود في public/storage";
        }

        // محاولة الربط اليدوي
        if (symlink($target, $link)) {
            return "تم الربط اليدوي بنجاح!";
        }
        
        return "فشل الربط، قد تكون دالة symlink معطلة أيضاً. تواصل مع الدعم الفني للسيرفر.";
    }
});