<?php

namespace App\Filament\Resources\SeenArticles\Pages;

use App\Filament\Resources\SeenArticles\SeenArticleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSeenArticles extends ListRecords
{
    protected static string $resource = SeenArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
