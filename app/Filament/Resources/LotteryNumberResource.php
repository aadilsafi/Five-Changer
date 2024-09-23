<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LotteryNumberResource\Pages;
use App\Filament\Resources\LotteryNumberResource\RelationManagers;
use App\Models\LotteryNumber;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LotteryNumberResource extends Resource
{
    protected static ?string $model = LotteryNumber::class;

    protected static ?string $navigationIcon = 'heroicon-o-hashtag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('draw_number')->label('Draw')->searchable()->sortable(),
                TextColumn::make('number_one')->label('First Number')->searchable(),
                TextColumn::make('number_two')->label('Second Number')->searchable(),
                TextColumn::make('number_three')->label('Third Number')->searchable(),
                TextColumn::make('number_four')->label('Fourth Number')->searchable(),
                TextColumn::make('number_five')->label('Fifth Number')->searchable(),
                TextColumn::make('created_at')->label('Date')->formatStateUsing(fn($state) => $state->toFormattedDateString())->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLotteryNumbers::route('/'),
            // 'create' => Pages\CreateLotteryNumber::route('/create'),
            // 'edit' => Pages\EditLotteryNumber::route('/{record}/edit'),
        ];
    }
}
