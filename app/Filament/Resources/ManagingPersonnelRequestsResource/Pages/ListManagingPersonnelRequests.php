<?php

namespace App\Filament\Resources\ManagingPersonnelRequestsResource\Pages;

use App\Filament\Resources\ManagingPersonnelRequestsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListManagingPersonnelRequests extends ListRecords
{
    protected static string $resource = ManagingPersonnelRequestsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
