<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancialPlanRequest;
use Illuminate\Support\Facades\Log;

class InterestController extends Controller
{
    public function store(Request $request)
    {
        // 1. التحقق من صحة البيانات
        // قمت بنقل 'category' داخل مصفوفة الـ Validation لتكون إلزامية
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:financial_plan_requests,email',
            'category'   => 'required|in:foundation,growth,wealth', // التحقق من القيمة القادمة من الفورم
        ], [
            'email.unique' => 'هذا البريد مسجل لدينا مسبقاً، سنتواصل معك قريباً.',
        ]);

        try {
            // 2. تخزين البيانات في SQLite
            FinancialPlanRequest::create([
                'first_name' => $validated['first_name'],
                'last_name'  => $validated['last_name'],
                'email'      => $validated['email'],
                'category'   => $validated['category'], // هنا التعديل: نأخذ القيمة المختارة من المستخدم
                'status'     => 'pending',
            ]);

            return back()->with('success', __('messages.thank_you_interest'));

        } catch (\Exception $e) {
            Log::error("خطأ في حفظ طلب التخطيط المالي: " . $e->getMessage());
            return back()->with('error', 'عذراً، حدث خطأ أثناء إرسال طلبك.');
        }
    }
}