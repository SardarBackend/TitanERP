<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Education extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static string $view = 'filament.pages.education';

    protected static ?string $title = ' آموزش و توسعه '; // عنوان صفحه

    protected static ?string $navigationGroup = 'منابع انسانی';
}
