<?php

namespace App\Filament\PartnerArea\Resources\ReferredUserResource\Pages;

use App\Filament\PartnerArea\Resources\ReferredUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReferredUsers extends ListRecords
{
    protected static string $resource = ReferredUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
