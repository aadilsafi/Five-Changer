<?php

namespace App\Filament\PartnerArea\Resources;

use App\Filament\PartnerArea\Resources\ReferredUserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ReferredUserResource extends Resource
{
    // Use the User model instead of a separate ReferredUser model
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Referred Users';

    protected static ?string $modelLabel = 'Referred User';

    protected static ?string $pluralModelLabel = 'Referred Users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required(),
                Forms\Components\DateTimePicker::make('email_verified_at'),
                // Add lottery tickets count
                Forms\Components\TextInput::make('lottery_tickets_count')
                ->label('Lottery Tickets')
                ->formatStateUsing(function (User $record): int {
                    return $record->lotteryTickets()->distinct('lottery_number_id')->count();
                })
                ->disabled()
                ->dehydrated(false),
                // Add more fields as needed
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\IconColumn::make('email_verified_at')
                    ->boolean()
                    ->label('Verified')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle'),
                // Add lottery tickets count column
                Tables\Columns\TextColumn::make('lottery_tickets_count')
                    ->label('Lottery Tickets')
                    ->state(function ($record) {
                        return $record->lotteryTickets()->distinct('lottery_number_id')->count();
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
                // Add more columns as needed
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Limit the actions partners can perform
                // No edit or delete unless needed
            ])
            ->bulkActions([
                // Limited bulk actions for partners
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define any relations if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReferredUsers::route('/'),
            'view' => Pages\ViewReferredUser::route('/{record}'),
            // 'create' => Pages\CreateReferredUser::route('/create'), // Partners shouldn't create users directly
            // 'edit' => Pages\EditReferredUser::route('/{record}/edit'), // Partners shouldn't edit users
        ];
    }

    // Filter query to only show users referred by the current partner
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('referred_by', Auth::id());
    }
}
