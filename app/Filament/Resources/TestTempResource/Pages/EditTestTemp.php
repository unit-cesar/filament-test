<?php

namespace App\Filament\Resources\TestTempResource\Pages;

use App\Filament\Resources\TestTempResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestTemp extends EditRecord
{
    protected static string $resource = TestTempResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
