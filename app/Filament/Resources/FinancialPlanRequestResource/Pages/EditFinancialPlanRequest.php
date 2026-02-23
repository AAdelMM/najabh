<?php

namespace App\Filament\Resources\FinancialPlanRequestResource\Pages;

use App\Filament\Resources\FinancialPlanRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFinancialPlanRequest extends EditRecord
{
    protected static string $resource = FinancialPlanRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
