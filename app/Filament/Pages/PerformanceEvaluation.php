<?php

namespace App\Filament\Pages;

use App\Livewire\ComparisonTeamsChart;
use App\Livewire\EmployeePerformanceChart;
use Filament\Pages\Page;
use Filament\Tables\Columns\Concerns\HasWidth;

class PerformanceEvaluation extends Page
{
    use HasWidth ;
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static string $view = 'filament.pages.performance-evaluation';

    protected static ?string $title = 'ارزیابی عملکرد '; // عنوان صفحه

    protected static ?string $navigationGroup = 'منابع انسانی';

    protected function getHeaderWidgets(): array
    {
        return [
            EmployeePerformanceChart::class,
            ComparisonTeamsChart::class
        ];
    }
}

