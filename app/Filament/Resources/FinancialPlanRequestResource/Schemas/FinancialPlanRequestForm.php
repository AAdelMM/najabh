<?php

namespace App\Filament\Resources\FinancialPlanRequestResource\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class FinancialPlanRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('معلومات العميل الأساسية')
                    ->description('بيانات التواصل المسجلة من الموقع')
                    ->schema([
                        TextInput::make('first_name')
                            ->label('الاسم الأول')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('last_name')
                            ->label('الاسم الأخير')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('email')
                            ->label('البريد الإلكتروني')
                            ->email()
                            ->required()
                            ->unique(ignoreRecord: true),
                    ])->columns(2),

                Section::make('تحليل التخطيط المالي')
                    ->description('بناءً على منهجية نجابة والفئات المذكورة في ملف التخطيط المالي')
                    ->schema([
                        Select::make('category')
                            ->label('فئة التخطيط')
                            ->options([
                                'foundation' => 'الفئة الأولى: بناء الأساس المالي',
                                'growth' => 'الفئة الثانية: التوازن والنمو',
                                'wealth' => 'الفئة الثالثة: إدارة الثروة',
                            ])
                            ->required()
                            ->default('foundation'),

                        Select::make('status')
                            ->label('حالة الطلب')
                            ->options([
                                'pending' => 'قيد الانتظار',
                                'contacted' => 'تم التواصل',
                                'analyzing' => 'جاري التحليل السلوكي',
                                'completed' => 'تم تسليم الخطة',
                            ])
                            ->default('pending'),
                    ]),
            ]);
    }
}