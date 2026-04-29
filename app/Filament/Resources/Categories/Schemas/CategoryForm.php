<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->required()
                    ->maxLength(100)
                    ->live(onBlur: true),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(100)
                    ->unique(ignoreRecord: true),

                Select::make('parent_id')
                    ->label('Parent Category')
                    ->relationship('parent', 'name')
                    ->searchable()
                    ->preload()
                    ->nullable(),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('categories')
                    ->imageEditor()
                    ->columnSpanFull(),

                RichEditor::make('description')
                    ->label('Description')
                    ->placeholder('Write something about this category...')
                    ->maxLength(255)
                    ->columnSpanFull(),

                Toggle::make('status')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}