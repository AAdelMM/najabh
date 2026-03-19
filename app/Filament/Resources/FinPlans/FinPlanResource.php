<?php

namespace App\Filament\Resources\FinPlans;

use App\Filament\Resources\FinPlans\Pages\CreateFinPlan;
use App\Filament\Resources\FinPlans\Pages\EditFinPlan;
use App\Filament\Resources\FinPlans\Pages\ListFinPlans;
use App\Filament\Resources\FinPlans\Pages\ViewFinPlan;
use App\Filament\Resources\FinPlans\Schemas\FinPlanForm;
use App\Filament\Resources\FinPlans\Schemas\FinPlanInfolist;
use App\Filament\Resources\FinPlans\Tables\FinPlansTable;
use App\Models\FinancialPlanRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FinPlanResource extends Resource
{
    protected static ?string $model = FinancialPlanRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPencilSquare;

    protected static ?string $recordTitleAttribute = 'FinancialPlanRequest';
    protected static ?string $modelLabel = 'طلب تخطيط مالي';
    protected static ?string $pluralModelLabel = 'طلبات التخطيط المالي';
    protected static ?string $navigationLabel = 'الطلبات';
    public static function form(Schema $schema): Schema
    {
        return FinPlanForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FinPlanInfolist::configure($schema);
    }

    public static function table(Table $table): Table
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
                \Filament\Actions\EditAction::make(),
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
            'index' => ListFinPlans::route('/'),
            'create' => CreateFinPlan::route('/create'),
            'view' => ViewFinPlan::route('/{record}'),
            'edit' => EditFinPlan::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
