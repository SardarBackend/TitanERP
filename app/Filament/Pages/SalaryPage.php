<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class SalaryPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static string $view = 'filament.pages.salary-page';

    protected static ?string $title = 'حقوق و دستمزد'; // عنوان صفحه

    protected static ?string $navigationGroup = 'منابع انسانی';
}
