<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManagingPersonnelRequestsResource\Pages;
use App\Filament\Resources\ManagingPersonnelRequestsResource\RelationManagers;
use App\Models\business;
use App\Models\Request;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ManagingPersonnelRequestsResource extends Resource
{
    protected static ?string $model = Request::class;

    protected static ?string $pluralModelLabel = ' مدیریت درخواست‌ های پرسنلی';

    protected static ?string $modelLabel = ' درخواست‌ ';

    protected static ?string $navigationGroup = 'منابع انسانی';

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    // protected static string $view = 'filament.pages.managing-personnel-requests-page';

    // public static function query(Builder $query): Builder
    // {

    //     return $query->where('id', Auth::user()->business()->id); // فقط کاربران فعال را نمایش بده
    // }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('answer')
                ->label('پاسخ به درخواست')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->query( auth()->user()->business->request()->getQuery() )
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('user.name')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('subject')->searchable(),

                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListManagingPersonnelRequests::route('/'),
            'create' => Pages\CreateManagingPersonnelRequests::route('/create'),
            'edit' => Pages\EditManagingPersonnelRequests::route('/{record}/edit'),
        ];
    }
}
