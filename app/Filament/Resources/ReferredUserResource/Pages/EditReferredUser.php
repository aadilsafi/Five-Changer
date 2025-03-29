<?php

namespace App\Filament\Resources\ReferredUserResource\Pages;

use App\Filament\Resources\ReferredUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReferredUser extends EditRecord
{
    protected static string $resource = ReferredUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
