<?php

namespace App\Filament\Resources\RestAPIResource\Pages;

use App\Filament\Resources\RestAPIResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRestAPI extends EditRecord
{
    protected static string $resource = RestAPIResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
