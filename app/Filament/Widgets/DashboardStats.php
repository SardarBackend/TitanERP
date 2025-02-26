<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('👥 تعداد کاربران', User::count())
                ->description('تعداد کل کاربران ثبت‌نام شده')
                ->icon('heroicon-o-user-group')
                ->color('success'),

            Stat::make('🛒 تعداد سفارشات', User::count())
                ->description('تعداد کل سفارشات ثبت‌شده')
                ->icon('heroicon-o-shopping-cart')
                ->color('warning'),

            Stat::make('💰 درآمد کل', number_format(User::sum('id')) . ' تومان')
                ->description('مجموع مبلغ پرداختی کاربران')
                // ->icon('heroicon-o-cash')
                ->color('primary'),

        ];
    }

    protected static ?int $sort = 1; // اول نمایش داده شود

}
