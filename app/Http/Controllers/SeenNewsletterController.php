<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SeenNewsletter;

class SeenNewsletterController extends Controller
{
   public function subscribe(Request $request)
    {
        // 1. التحقق من البيانات
        $validated = $request->validate([
            'email' => 'required|email|unique:seen_newsletters,email',
        ], [
            'email.unique' => 'أنت مشترك بالفعل في نشرة سين.',
            'email.email' => 'يرجى إدخال بريد إلكتروني صحيح.',
        ]);

        // 2. الحفظ في قاعدة البيانات
        SeenNewsletter::create([
            'email' => $validated['email'],
            'status' => 'active',
        ]);

        // 3. العودة مع رسالة نجاح
        return back()->with('success_seen', 'تم انضمامك لنشرة "سين" بنجاح.. ترقب القراءة الأولى.');
    }

    public function show($slug)
{
    // جلب المقال من قاعدة البيانات
    $article = \App\Models\SeenArticle::where('slug', $slug)
                ->where('is_published', true) // لضمان عدم دخول الزوار للمقالات غير المنشورة
                ->firstOrFail(); // تعيد 404 إذا كان الرابط خطأ

    // إرسال البيانات لصفحة العرض المنفصلة
    return view('seenShow', compact('article'));
}

}
