<?php

namespace App\Filament\Resources\WhishLists\Pages;

use App\Filament\Resources\WhishLists\WhishListResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWhishList extends EditRecord
{
    protected static string $resource = WhishListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
