<?php

namespace App\Filament\Widgets;

use App\Models\User;  // مدل User برای گرفتن اطلاعات کاربران
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentUsers extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(User::latest())  // گرفتن کاربران به ترتیب تاریخ ثبت‌نام
            ->columns([
                Tables\Columns\TextColumn::make('id') // شماره کاربر
                    ->label('User ID')
                    ->sortable(),

                Tables\Columns\TextColumn::make('name') // نام کاربر
                    ->label('Name')
                    ->sortable(),

                Tables\Columns\TextColumn::make('email') // ایمیل کاربر
                    ->label('Email')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at') // تاریخ ثبت‌نام
                    ->label('Registered At')
                    ->sortable()
                    ->dateTime(),


            ]);
    }
    protected static ?int $sort = 2; // اول نمایش داده شود
}
