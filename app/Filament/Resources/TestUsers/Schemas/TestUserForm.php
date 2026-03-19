<?php

namespace App\Filament\Resources\TestUsers\Schemas;

use Filament\Schemas\Schema;

class TestUserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }
}
