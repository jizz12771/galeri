<?php

namespace App\Filament\Resources\FotograferResource\Pages;

use App\Filament\Resources\FotograferResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFotografers extends ManageRecords
{
    protected static string $resource = FotograferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
