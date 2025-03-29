<?php

namespace App\Filament\Resources\ReferredUserResource\Pages;

use App\Filament\Resources\ReferredUserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateReferredUser extends CreateRecord
{
    protected static string $resource = ReferredUserResource::class;
}
