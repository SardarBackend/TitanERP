<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendanceResource\Pages;
use App\Filament\Resources\AttendanceResource\RelationManagers;
use App\Models\Attendance;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Textarea;


class AttendanceResource extends Resource
{
    protected static ?string $model = Attendance::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';


    protected static ?string $pluralModelLabel = 'شیفت و حضور و غیاب';

    protected static ?string $modelLabel = 'شیفت';


    protected static ?string $navigationGroup = 'منابع انسانی';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->label('Employee')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->required(),

                DatePicker::make('date')
                    ->label('Date')
                    ->required(),

                TimePicker::make('check_in')
                    ->label('Check-in Time')
                    ->nullable(),

                TimePicker::make('check_out')
                    ->label('Check-out Time')
                    ->nullable(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'present' => 'Present',
                        'absent' => 'Absent',
                        'late' => 'Late',
                        'on_leave' => 'On Leave',
                    ])
                    ->default('present'),

                Textarea::make('remarks')
                    ->label('Remarks')
                    ->nullable(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Employee')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('date')->label('Date')->sortable(),
                Tables\Columns\TextColumn::make('check_in')->label('Check-in'),
                Tables\Columns\TextColumn::make('check_out')->label('Check-out'),
                BadgeColumn::make('status')
                ->colors([
                    'success' => 'present',
                    'danger' => 'absent',
                    'warning' => 'late',
                ])
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    'present' => 'حاضر',
                    'absent' => 'غایب',
                    'late' => 'دیر',
                    default => 'نامشخص',
                })

            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Filter by Status')
                    ->options([
                        'present' => 'Present',
                        'absent' => 'Absent',
                        'late' => 'Late',
                        'on_leave' => 'On Leave',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAttendances::route('/'),
            'create' => Pages\CreateAttendance::route('/create'),
            'edit' => Pages\EditAttendance::route('/{record}/edit'),
        ];
    }
}
