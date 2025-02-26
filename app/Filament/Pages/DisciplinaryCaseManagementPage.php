<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class DisciplinaryCaseManagementPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-scale';
    protected static string $view = 'filament.pages.disciplinary-case-management-page';

    protected static ?string $title = ' پرونده‌های انضباطی و شکایات'; // عنوان صفحه

    protected static ?string $navigationGroup = 'منابع انسانی';
}
