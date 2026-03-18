<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FinancialPlanRequestResource\Pages;
use App\Filament\Resources\FinancialPlanRequestResource\RelationManagers;
use App\Models\FinancialPlanRequest;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\SelectColumn; 
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Actions\Action;
use Filament\Forms\Components\Toggle;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use BackedEnum;

class FinancialPlanRequestResource extends Resource
{
    protected static ?string $model = FinancialPlanRequest::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'طلب تخطيط مالي'; // للمفرد
    protected static ?string $pluralModelLabel = 'طلبات التخطيط المالي'; // للجمع
    protected static ?string $navigationLabel = 'الطلبات'; // الاسم في القائمة الجانبية

public static function form(Schema $form): Schema    {
        return $form
            ->schema([
            
            // وضع الحقول داخل "قسم" ليكون التصميم أرتب
            Section::make('معلومات العميل الأساسية')
                ->description('بيانات التواصل المسجلة من الموقع')
                ->schema([
                    TextInput::make('first_name')
                        ->label('الاسم الأول')
                        ->required() // حقل إلزامي
                        ->maxLength(255),

                    TextInput::make('last_name')
                        ->label('الاسم الأخير')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('email')
                        ->label('البريد الإلكتروني')
                        ->email() // التأكد من صيغة الإيميل
                        ->required()
                        ->unique(ignoreRecord: true), // منع تكرار الإيميل
                ])->columns(2), // تقسيم الحقول لعمودين

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
                ])
         //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            // إظهار الاسم الأول والأخير
            Tables\Columns\TextColumn::make('first_name')
                ->label('الاسم الأول')
                ->searchable(),

            Tables\Columns\TextColumn::make('last_name')
                ->label('الاسم الأخير')
                ->searchable(),

            // إظهار البريد الإلكتروني
            Tables\Columns\TextColumn::make('email')
                ->label('البريد الإلكتروني')
                ->copyable(), // يسمح لك بنسخ الإيميل بضغطة واحدة

            // إظهار الفئة (بناءً على ملف التخطيط المالي)
            Tables\Columns\SelectColumn::make('category')
                ->options([
                    'foundation' => 'بناء الأساس',
                    'growth' => 'التوازن والنمو',
                    'wealth' => 'إدارة الثروة',
                ])
                ->label('فئة التخطيط'),

            // حقل الحالة القابل للتعديل من الجدول مباشرة
            SelectColumn::make('status')
                ->label('حالة الطلب')
                ->options([
                    'pending' => 'قيد الانتظار',
                    'contacted' => 'تم التواصل',
                    'analyzing' => 'جاري التحليل السلوكي',
                    'completed' => 'تم تسليم الخطة',
                ])
                ->selectablePlaceholder(false) // لمنع اختيار قيمة فارغة
                ->rules(['required']), // التأكد من وجود قيمة

            // حقل الفئة (يفضل إظهاره كـ Badge ليكون أجمل)
            Tables\Columns\TextColumn::make('category')
                ->label('فئة التخطيط')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'foundation' => 'gray',
                    'growth' => 'warning',
                    'wealth' => 'success',
                })
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    'foundation' => 'بناء الأساس',
                    'growth' => 'التوازن والنمو',
                    'wealth' => 'إدارة الثروة',
                }),
        

            // تاريخ الطلب
            Tables\Columns\TextColumn::make('created_at')
                ->label('تاريخ التسجيل')
                ->dateTime()
                ->sortable(),
        ])
        ->filters([
            // يمكنك إضافة فلاتر هنا لاحقاً
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFinancialPlanRequests::route('/'),
            'create' => Pages\CreateFinancialPlanRequest::route('/create'),
            'edit' => Pages\EditFinancialPlanRequest::route('/{record}/edit'),
        ];
    }
}
