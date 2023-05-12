<?php

namespace App\Filament\Resources\StreamResource\Pages;

use App\Filament\Resources\StreamResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageStreams extends ManageRecords
{
    protected static string $resource = StreamResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
