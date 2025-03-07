<?php

namespace App\Livewire;

use App\Models\Resume;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class ResumeStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Resumes', Resume::count())
                ->description('Total applications received')
                ->color('primary'),

            Stat::make('Hired', Resume::where('status', 'hired')->count())
                ->description('Total hired candidates')
                ->color('success'),

            Stat::make('Rejected', Resume::where('status', 'rejected')->count())
                ->description('Total rejected candidates')
                ->color('danger'),
        ];


    }

    protected static ?int $sort = 1;

}
