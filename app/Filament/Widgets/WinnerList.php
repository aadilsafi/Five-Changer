<?php

namespace App\Filament\Widgets;

use App\Models\LotteryNumber;
use App\Models\LotteryTicket;
use App\Models\User;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Support\Facades\DB;

class WinnerList extends BaseWidget
{
    public function table(Table $table): Table
    {
        $latest_lottery = LotteryNumber::latest('id')->first();

        $latestNumbersSorted = collect([
            $latest_lottery->number_one,
            $latest_lottery->number_two,
            $latest_lottery->number_three,
            $latest_lottery->number_four,
            $latest_lottery->number_five
        ])->sort()->values()->implode(',');

        $matchingRecords = LotteryTicket::select('user_id', 'try_number', DB::raw('GROUP_CONCAT(lottery_number ORDER BY lottery_number ASC) AS lottery_numbers'))
            ->groupBy('user_id', 'try_number')
            ->having(DB::raw('GROUP_CONCAT(lottery_number ORDER BY lottery_number ASC)'), '=', $latestNumbersSorted)
            ->orderBy('user_id')
            ->orderBy('try_number')
            ->get();
        return $table
            ->query(
                User::role('User')->whereIn('id', $matchingRecords->pluck('user_id')->toArray())
            )
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
            ]);
    }
}
