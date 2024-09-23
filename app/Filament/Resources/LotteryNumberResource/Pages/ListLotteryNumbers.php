<?php

namespace App\Filament\Resources\LotteryNumberResource\Pages;

use App\Filament\Resources\LotteryNumberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLotteryNumbers extends ListRecords
{
    protected static string $resource = LotteryNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
