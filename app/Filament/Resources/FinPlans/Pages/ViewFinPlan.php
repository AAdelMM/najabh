<?php

namespace App\Filament\Resources\FinPlans\Pages;

use App\Filament\Resources\FinPlans\FinPlanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFinPlan extends ViewRecord
{
    protected static string $resource = FinPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
