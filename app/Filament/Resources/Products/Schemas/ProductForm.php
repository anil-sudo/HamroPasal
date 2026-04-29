<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('category_id')
                    ->required()
                    ->numeric(),
                TextInput::make('vendor_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('discount_price')
                    ->numeric()
                    ->default(null)
                    ->prefix('$'),
                TextInput::make('stock')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('thumbnail')
                    ->default(null),
                FileUpload::make('gallery')
                    ->label('Gallery Images')
                    ->image()
                    ->multiple()
                    ->imageEditor()
                    ->openable()
                    ->downloadable()
                    ->previewable()
                    ->deletable()
                    ->disk('public')
                    ->directory('media/product')
                    ->required()
                    ->panelLayout('grid')
                    ->reorderable()
                    ->appendFiles()
                    ->minFiles(2)
                    ->maxFiles(5),

                Toggle::make('status')
                    ->required(),
            ]);
    }
}
