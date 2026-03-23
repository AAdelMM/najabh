<?php

namespace App\Filament\Resources\SeenArticles;

use App\Filament\Resources\SeenArticles\Pages\CreateSeenArticle;
use App\Filament\Resources\SeenArticles\Pages\EditSeenArticle;
use App\Filament\Resources\SeenArticles\Pages\ListSeenArticles;
use App\Filament\Resources\SeenArticles\Schemas\SeenArticleForm;
use App\Filament\Resources\SeenArticles\Tables\SeenArticlesTable;
use App\Models\SeenArticle;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SeenArticleResource extends Resource
{
    protected static ?string $model = SeenArticle::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboard;
    protected static ?string $modelLabel = 'مقالة جديدة';
    protected static ?string $pluralModelLabel = 'عرض المقالات';
    protected static ?string $navigationLabel = 'مقالات سين';
    protected static ?string $recordTitleAttribute = 'SeenArticle';

    public static function form(Schema $schema): Schema
    {
        return SeenArticleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SeenArticlesTable::configure($table);
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
            'index' => ListSeenArticles::route('/'),
            'create' => CreateSeenArticle::route('/create'),
            'edit' => EditSeenArticle::route('/{record}/edit'),
        ];
    }
}
