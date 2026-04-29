<?php

namespace App\Filament\Resources\WhishLists\Pages;

use App\Filament\Resources\WhishLists\WhishListResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWhishLists extends ListRecords
{
    protected static string $resource = WhishListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
