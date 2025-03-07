<?php

namespace App\Filament\Resources\ManagingPersonnelRequestsResource\Pages;

use App\Filament\Resources\ManagingPersonnelRequestsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditManagingPersonnelRequests extends EditRecord
{
    protected static string $resource = ManagingPersonnelRequestsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
