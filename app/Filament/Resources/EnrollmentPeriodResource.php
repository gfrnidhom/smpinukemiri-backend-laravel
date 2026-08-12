<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EnrollmentPeriodResource\Pages;
use App\Filament\Resources\EnrollmentPeriodResource\RelationManagers;
use App\Filament\Resources\EnrollmentPeriodResource\Widgets\EnrollmentStatsWidget;
use App\Models\EnrollmentPeriod;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EnrollmentPeriodResource extends Resource
{
    protected static ?string $model = EnrollmentPeriod::class;

    protected static ?string $navigationGroup = 'Manajemen PPDB';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'Gelombang';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('period_name')
                        ->label('Gelombang Pendaftaran')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('start_date')
                        ->label('Mulai')
                        ->required(),
                    Forms\Components\DatePicker::make('end_date')
                        ->label('Tanggal Berakhir')
                        ->required(),
                    Forms\Components\TextInput::make('quota')
                        ->label('Kuota Pendaftaran')
                        ->required()
                        ->numeric()
                        ->default(100),
                    ToggleButtons::make('status')
                        ->required()
                        ->inline()
                        ->options([
                            'Open' => 'Buka',
                            'Closed' => 'Tutup',

                        ])
                        ->icons([
                            'Open' => 'heroicon-o-check-circle',
                            'Closed' => 'heroicon-o-pencil',
                        ])
                        ->colors([
                            'Open' => 'success',
                            'Closed' => 'danger',
                        ]),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('period_name')
                    ->label('Gelombang PPDB')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Tanggal Mulai')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('Tanggal Berakhir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('quota')
                    ->label('Kuota')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('applicants_count')
                    ->label('Jumlah Pendaftar')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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

    public static function getWidgets(): array
    {
        return [
            EnrollmentStatsWidget::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEnrollmentPeriods::route('/'),
            'create' => Pages\CreateEnrollmentPeriod::route('/create'),
            'edit' => Pages\EditEnrollmentPeriod::route('/{record}/edit'),
        ];
    }
}
