<?php

namespace App\Filament\Resources\FinPlans\Pages;

use App\Filament\Resources\FinPlans\FinPlanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFinPlans extends ListRecords
{
    protected static string $resource = FinPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
