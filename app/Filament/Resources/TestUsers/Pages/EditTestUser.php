<?php

namespace App\Filament\Resources\TestUsers\Pages;

use App\Filament\Resources\TestUsers\TestUserResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTestUser extends EditRecord
{
    protected static string $resource = TestUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
