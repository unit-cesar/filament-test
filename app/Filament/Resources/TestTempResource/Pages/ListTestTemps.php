<?php

namespace App\Filament\Resources\TestTempResource\Pages;

use App\Filament\Resources\TestTempResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestTemps extends ListRecords
{
    protected static string $resource = TestTempResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
