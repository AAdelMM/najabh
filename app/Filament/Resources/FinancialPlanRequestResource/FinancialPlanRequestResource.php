<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FinancialPlanRequestResource\Pages\CreateFinancialPlanRequest;
use App\Filament\Resources\FinancialPlanRequestResource\Pages\EditFinancialPlanRequest;
use App\Filament\Resources\FinancialPlanRequestResource\Pages\ListFinancialPlanRequests;
use App\Filament\Resources\FinancialPlanRequestResource\Schemas\FinancialPlanRequestForm;
use App\Filament\Resources\FinancialPlanRequestResource\Tables\FinancialPlanRequestTable;
use App\Models\FinancialPlanRequest;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use BackedEnum;


class FinancialPlanRequestResource extends Resource
{
    protected static ?string $model = FinancialPlanRequest::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'طلب تخطيط مالي';
    protected static ?string $pluralModelLabel = 'طلبات tss المالي';
    protected static ?string $navigationLabel = 'tss';

    public static function form(Schema $form): Schema
    {
        return FinancialPlanRequestForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return FinancialPlanRequestTable::configure($table);
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
            'index' => ListFinancialPlanRequests::route('/'),
            'create' => CreateFinancialPlanRequest::route('/create'),
            'edit' => EditFinancialPlanRequest::route('/{record}/edit'),
        ];
    }
}