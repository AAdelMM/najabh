<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialPlanRequest extends Model
{
    use HasFactory;

    // هذا هو السطر المطلوب لحل المشكلة
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'category',
        'status',
        'behavioral_notes', // إذا كنت أضفت حقل الملاحظات السلوكية
    ];
}


