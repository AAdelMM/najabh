<?php

namespace App\Filament\Resources\SeenNewsletterResource\Pages;

use App\Filament\Resources\SeenNewsletterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSeenNewsletters extends ListRecords
{
    protected static string $resource = SeenNewsletterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
