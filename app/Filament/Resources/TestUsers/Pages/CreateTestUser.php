<?php

namespace App\Filament\Resources\TestUsers\Pages;

use App\Filament\Resources\TestUsers\TestUserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTestUser extends CreateRecord
{
    protected static string $resource = TestUserResource::class;
}
