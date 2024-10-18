<?php

namespace App\Filament\Resources\RestAPIResource\Pages;

use App\Filament\Resources\RestAPIResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRestAPI extends CreateRecord
{
    protected static string $resource = RestAPIResource::class;
}
