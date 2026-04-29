<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Str;
use App\Filament\Resources\Categories\Tables\SelectParentCategoryTable;
use Filament\Forms\Components\ModalTableSelect;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('Category Name')
                    ->placeholder('e.g., Technology, Health, Lifestyle')
                    ->helperText('Enter a descriptive name for the category. This will be visible in menus and filters.')
                    ->required()
                    ->prefixIcon(Heroicon::Signal)
                    ->live(onBlur: true)
                    ->maxLength(60)
                    ->afterStateUpdated(function (Set $set, ?string $state) {
                        $cleanedState = preg_replace('/\s+/', ' ', trim($state ?? ''));

                        $slug = Str::slug(str_replace('&', 'and', $cleanedState));

                        $set('slug', $slug);
                        $set('name', $cleanedState);
                    }),

                TextInput::make('slug')
                    ->label('Slug / URL Identifier')
                    ->placeholder('e.g., technology, health-tips')
                    ->helperText('Unique URL-friendly identifier for this category. Auto-generated if left blank.')
                    ->required()
                    ->prefixIcon(Heroicon::GlobeAlt)
                    ->unique(ignoreRecord: true)
                    ->dehydrated()
                    ->readonly()
                    ->maxLength(80),

                

                ModalTableSelect::make('parent_id')
                    ->label('Parent Category')
                    ->relationship(
                        name: 'parent',
                        titleAttribute: 'name'
                    )
                    ->tableConfiguration(SelectParentCategoryTable::class)
                    ->helperText('Choose a parent category to create a hierarchy, or leave blank for a top-level category.')
                    ->nullable()
                    ->badge()
                    ->rules([
                        'different:id',
                    ])
                    ->validationMessages([
                        'different' => 'A category cannot be its own parent.',
                    ]),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('categories')
                    ->nullable()
                    ->storeFileNamesIn('image'),

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