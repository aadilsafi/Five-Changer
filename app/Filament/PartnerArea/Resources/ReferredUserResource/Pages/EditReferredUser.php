<?php

namespace App\Filament\PartnerArea\Resources\ReferredUserResource\Pages;

use App\Filament\PartnerArea\Resources\ReferredUserResource;
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
