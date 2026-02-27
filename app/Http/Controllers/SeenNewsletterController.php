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
}
