<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BlogPostsChart;
use App\Filament\Widgets\DashboardStats;
use Filament\Pages\Page;
use App\Filament\Widgets\RecentUsers; // اضافه کردن ویجت RecentUsers
use App\Filament\Widgets\SellChart;
use Filament\Pages\Dashboard as BaseDashboard;
class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.dashboard';



    public function getWidgets(): array
    {
        return [
            DashboardStats::class,
            RecentUsers::class,  // اضافه کردن ویجت به داشبورد
            BlogPostsChart::class,
            SellChart::class

        ];
    }

}
