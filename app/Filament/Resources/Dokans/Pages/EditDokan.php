<?php

namespace App\Filament\Resources\Dokans\Pages;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\DokanCredential;
use App\Filament\Resources\Dokans\DokanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDokan extends EditRecord
{
    protected static string $resource = DokanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

protected function mutateFormDataBeforeSave(array $data): array
{
    if ($data['status'] === 'approved') {

        $password = rand(10000, 99999);

        $data["password"] = Hash::make($password);

        Mail::to($data["email"])
            ->send(new DokanCredential($data, $password));
    }

    return $data;
}
}