<?php

namespace App\Filament\Resources\FinPlans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class FinPlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->required()
                    ->label('الاسم الأول'),

                TextInput::make('last_name')
                    ->required()
                    ->label('الاسم االاخير'),

                TextInput::make('email')
                    ->label('البريد الإلكتروني')
                    ->required(),

                Select::make('category')
                    ->label('فئة التخطيط')
                    ->options([
                        'foundation' => 'بناء الأساس',
                        'growth' => 'التوازن والنمو',
                        'wealth' => 'إدارة الثروة',
                    ])
                    ->required(),

                Select::make('status')
                    ->label('حالة الطلب')
                    ->options([
                        'pending' => 'قيد الانتظار',
                        'contacted' => 'تم التواصل',
                        'analyzing' => 'جاري التحليل السلوكي',
                        'completed' => 'تم تسليم الخطة',
                    ])
                    ->required(),
            ]);
    }
}
