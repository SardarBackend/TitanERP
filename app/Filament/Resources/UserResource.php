<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\Employee;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\Action;
class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    protected static string $view = 'filament.pages.managing-remote-employees-page';

    protected static ?string $pluralModelLabel = 'کارمندان دورکار';

    protected static ?string $modelLabel = 'کارمند';

    protected static ?string $navigationGroup = 'منابع انسانی';


    public static function form(Form $form): Form
    {
        return $form
        ->schema(function () {
            if (request()->routeIs('filament.admin.resources.users.create')) {
                return [

                    Forms\Components\TextInput::make('name')
                        ->label('نام')
                        ->required(),

                    Forms\Components\TextInput::make('email')
                        ->label('ایمیل')
                        ->email()
                        ->required()
                        ->unique('users', 'email'),

                    Forms\Components\TextInput::make('password')
                        ->label('رمز عبور')
                        ->password()
                        ->required()
                        ->minLength(8),

                    Forms\Components\Select::make('categories')
                    ->label('Categories')
                    ->multiple() // اجازه انتخاب چند دسته‌بندی
                    ->options(
                        Employee::whereNotNull('name')->pluck('name', 'id')
                    )
                    ->required(),

                    Forms\Components\FileUpload::make('image')
                    ->required()

                ];
            } else {
                return [
                    Forms\Components\TextInput::make('name')
                        ->label('نام'),

                        Forms\Components\RichEditor::make('about')
                        ->label('بیوگرافی')
                        ,

                    Forms\Components\TextInput::make('email')
                        ->label('ایمیل')
                        ->email()
                        ->unique('users', 'email'),

                    Forms\Components\TextInput::make('password')
                        ->label('رمز عبور (اختیاری)')
                        ->password()
                        ->nullable()
                        ->minLength(8),
                ];
            }
        });
    }

    public static function table(Table $table): Table
    {
        return $table
        ->query( auth()->user()->business->employees()->where('Is_Telework',1)->getQuery() )
        ->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('name')->searchable(),
            Tables\Columns\TextColumn::make('email')->searchable(),
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
            Action::make('showImages')
            ->label('گالری تصاویر')
            // ->icon('heroicon-o-photo')
            ->action(function ($record) {
                // منطق نمایش تصاویر در اینجا
                return redirect()->route('products.showImages', $record->id);
            }),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
