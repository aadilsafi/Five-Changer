<?php
namespace App\Filament\PartnerArea\Resources\ReferredUserResource\Pages;

use App\Filament\PartnerArea\Resources\ReferredUserResource;
use Filament\Resources\Pages\ViewRecord;

class ViewReferredUser extends ViewRecord
{
    protected static string $resource = ReferredUserResource::class;

    // Optional: customize the actions on the view page
    protected function getHeaderActions(): array
    {
        return [
            // No edit or delete actions for partners
        ];
    }
}
