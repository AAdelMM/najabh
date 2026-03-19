<?php

namespace App\Filament\Resources\TestUsers\Pages;

use App\Filament\Resources\TestUsers\TestUserResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTestUsers extends ListRecords
{
    protected static string $resource = TestUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
