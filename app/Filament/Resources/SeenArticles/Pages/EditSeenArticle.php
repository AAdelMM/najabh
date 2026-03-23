<?php

namespace App\Filament\Resources\SeenArticles\Pages;

use App\Filament\Resources\SeenArticles\SeenArticleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSeenArticle extends EditRecord
{
    protected static string $resource = SeenArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
