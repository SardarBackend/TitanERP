<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResumeResource\Pages;
use App\Filament\Resources\ResumeResource\RelationManagers;
use App\Models\Resume;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;

class ResumeResource extends Resource
{
    protected static ?string $model = Resume::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';


    protected static ?string $pluralModelLabel ='جذب و استخدام' ;

    protected static ?string $modelLabel = ' رزومه ';

    protected static ?string $navigationGroup = 'منابع انسانی';
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
        ->query( auth()->user()->business->resumes()->getQuery() )
            ->columns([
                TextColumn::make('applicant_name')->label('Applicant'),
                TextColumn::make('email')->label('Email'),
                BadgeColumn::make('status')
                ->colors([
                    'primary' => 'pending',
                    'success' => 'hired',
                    'danger' => 'rejected',
                ])
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    'pending' => 'Pending',
                    'hired' => 'Hired',
                    'rejected' => 'Rejected',
                    default => ucfirst($state),
                })
            ])
            ->actions([
                Action::make('download')
                    ->label('دانلود رزومه')
                    // ->icon('heroicon-m-download')
                    ->url(fn (Resume $record) => asset('storage/' . $record->resume_file))
                    ->openUrlInNewTab(),

                Action::make('hire')
                    ->label('استخدام')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->action(fn (Resume $record) => $record->update(['status' => 'hired'])),

                Action::make('reject')
                    ->label('رد')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->action(fn (Resume $record) => $record->update(['status' => 'rejected'])),
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
            'index' => Pages\ListResumes::route('/'),
            'create' => Pages\CreateResume::route('/create'),
            'edit' => Pages\EditResume::route('/{record}/edit'),
        ];
    }
}
