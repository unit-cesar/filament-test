<?php

namespace App\Filament\Resources\TestTempResource\Pages;

use App\Filament\Resources\TestTempResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestTemp extends CreateRecord
{
    protected static string $resource = TestTempResource::class;
}
