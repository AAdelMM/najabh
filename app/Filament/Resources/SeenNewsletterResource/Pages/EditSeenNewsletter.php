<?php

namespace App\Filament\Resources\SeenNewsletterResource\Pages;

use App\Filament\Resources\SeenNewsletterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSeenNewsletter extends EditRecord
{
    protected static string $resource = SeenNewsletterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
