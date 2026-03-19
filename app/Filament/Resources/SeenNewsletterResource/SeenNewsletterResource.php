<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeenNewsletterResource\Pages;
use App\Filament\Resources\SeenNewsletterResource\Schemas\SeenNewsletterForm;
use App\Filament\Resources\SeenNewsletterResource\Tables\SeenNewsletterTable;
use App\Models\SeenNewsletter;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use BackedEnum;

class SeenNewsletterResource extends Resource
{
    protected static ?string $model = SeenNewsletter::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'طلب النشرة البريدية';
    protected static ?string $pluralModelLabel = 'طلبات النشرة البريدية';
    protected static ?string $navigationLabel = 'النشرة البريدية';

    public static function form(Schema $form): Schema
    {
        return SeenNewsletterForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return SeenNewsletterTable::configure($table);
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
            'index' => Pages\ListSeenNewsletters::route('/'),
            'create' => Pages\CreateSeenNewsletter::route('/create'),
            'edit' => Pages\EditSeenNewsletter::route('/{record}/edit'),
        ];
    }
}