<?php

namespace App\Filament\Dokan\Resources\Products\Pages;

use App\Filament\Dokan\Resources\Products\ProductResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    #[override]
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Attach logged-in dokan
        $dokan = Auth::guard('dokan')->user();

        if ($dokan) {
            $data['dokan_id'] = $dokan->id;
        }

        // Generate slug
        $data['slug'] = Str::slug($data['name']);

        return $data;
    }
}