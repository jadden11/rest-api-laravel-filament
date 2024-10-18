<?php

namespace App\Filament\Resources\RestAPIResource\Pages;

use App\Filament\Resources\RestAPIResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRestAPIS extends ListRecords
{
    protected static string $resource = RestAPIResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
