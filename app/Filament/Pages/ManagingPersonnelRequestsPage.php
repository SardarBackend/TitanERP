<?php

// namespace App\Filament\Pages;

// use Filament\Pages\Page;
// use Filament\Tables;
// use Filament\Tables\Table;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Columns\TextColumn;
// use Filament\Tables\Contracts\HasTable;
// use Filament\Tables\Concerns\InteractsWithTable;
// use App\Models\User;
// class ManagingPersonnelRequestsPage extends Page implements HasTable
// {
//     use Tables\Concerns\InteractsWithTable;

//     protected static ?string $navigationIcon = 'heroicon-o-envelope';

//     protected static string $view = 'filament.pages.managing-personnel-requests-page';
//     protected static ?string $title = ' مدیریت درخواست‌ های پرسنلی'; // عنوان صفحه

//     protected static ?string $navigationGroup = 'منابع انسانی';

//     public function table(Table $table): Table
//     {
//         return $table
//             ->query(User::query()) // کوئری برای دریافت محصولات
//             ->columns([
//                 TextColumn::make('id')->label('شناسه')->sortable(),
//                 TextColumn::make('name')->label('نام محصول')->searchable(),
//                 TextColumn::make('price')->label('قیمت')->sortable(),
//                 TextColumn::make('created_at')->label('تاریخ ایجاد')->date(),
//             ])
//             ->filters([])
//             ->actions([]);
//     }

// }
