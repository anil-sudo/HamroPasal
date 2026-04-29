<?php

namespace App\Filament\Resources\WhishLists;

use App\Filament\Resources\WhishLists\Pages\CreateWhishList;
use App\Filament\Resources\WhishLists\Pages\EditWhishList;
use App\Filament\Resources\WhishLists\Pages\ListWhishLists;
use App\Filament\Resources\WhishLists\Schemas\WhishListForm;
use App\Filament\Resources\WhishLists\Tables\WhishListsTable;
use App\Models\WhishList;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WhishListResource extends Resource
{
    protected static ?string $model = WhishList::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHeart;

     protected static string|\UnitEnum|null $navigationGroup = 'Engagement';
    
    protected static ?int $navigationSort = 97;

    public static function form(Schema $schema): Schema
    {
        return WhishListForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WhishListsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWhishLists::route('/'),
            'create' => CreateWhishList::route('/create'),
            'edit' => EditWhishList::route('/{record}/edit'),
        ];
    }
}
