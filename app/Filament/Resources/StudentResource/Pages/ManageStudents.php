<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

use Filament\Tables\Filters\Layout;

class ManageStudents extends ManageRecords
{
    protected static string $resource = StudentResource::class;

    protected function getTableFiltersLayout(): ?string {
        return Layout::AboveContent;
    }

    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return [25,50,75, 100];
    }


    public function isTableSearchable(): bool {
        return true;
    }


    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
