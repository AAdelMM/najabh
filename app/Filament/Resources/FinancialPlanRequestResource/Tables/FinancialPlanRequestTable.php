<?php

namespace App\Filament\Resources\FinancialPlanRequestResource\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;

class FinancialPlanRequestTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->label('الاسم الأول')
                    ->searchable(),

                TextColumn::make('last_name')
                    ->label('الاسم الأخير')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('البريد الإلكتروني')
                    ->copyable(),

                // First category column as badge (for display)
                TextColumn::make('category')
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

                // Status as editable select column
                SelectColumn::make('status')
                    ->label('حالة الطلب')
                    ->options([
                        'pending' => 'قيد الانتظار',
                        'contacted' => 'تم التواصل',
                        'analyzing' => 'جاري التحليل السلوكي',
                        'completed' => 'تم تسليم الخطة',
                    ])
                    ->selectablePlaceholder(false)
                    ->rules(['required']),

                TextColumn::make('created_at')
                    ->label('تاريخ التسجيل')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                // Add filters here if needed
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteAction::make(),
            ]);
    }
}