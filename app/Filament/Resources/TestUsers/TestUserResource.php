<?php

namespace App\Filament\Resources\TestUsers;

use App\Filament\Resources\TestUsers\Pages\CreateTestUser;
use App\Filament\Resources\TestUsers\Pages\EditTestUser;
use App\Filament\Resources\TestUsers\Pages\ListTestUsers;
use App\Filament\Resources\TestUsers\Schemas\TestUserForm;
use App\Filament\Resources\TestUsers\Tables\TestUsersTable;
use App\Models\FinancialPlanRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TestUserResource extends Resource
{
    protected static ?string $model = FinancialPlanRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedFlag;

    protected static ?string $recordTitleAttribute = 'test';
   
    protected static ?string $navigationLabel = 'test';

    public static function form(Schema $schema): Schema
    {
        return TestUserForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TestUsersTable::configure($table);
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
            'index' => ListTestUsers::route('/'),
            'create' => CreateTestUser::route('/create'),
            'edit' => EditTestUser::route('/{record}/edit'),
        ];
    }
}
