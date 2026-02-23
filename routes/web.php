<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SetLocale;
use App\Http\Controllers\InterestController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

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

Route::get('/fix-storage', function () {
    // 1. محاولة حذف الاختصار القديم إذا كان موجوداً كملف معطل
    $shortcut = public_path('storage');
    if (file_exists($shortcut)) {
        File::delete($shortcut);
    }

    // 2. محاولة إنشاء الاختصار باستخدام وظيفة PHP الأساسية
    try {
        Artisan::call('storage:link');
        return "تم ربط الـ Storage بنجاح عبر Artisan!";
    } catch (\Exception $e) {
        // 3. إذا فشل Artisan (بسبب تعطيل exec)، سنحاول يدوياً
        $target = storage_path('app/public');
        $link = public_path('storage');
        
        if (symlink($target, $link)) {
            return "تم إنشاء الـ Symlink يدوياً بنجاح!";
        } else {
            return "فشل النظام في إنشاء الرابط، يرجى التواصل مع الدعم الفني لفتح وظيفة symlink.";
        }
    }
});