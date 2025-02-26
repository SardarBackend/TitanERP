<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class SellChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [5, 10, 15], // مقدار هر فیلد
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.8)',  // قرمز
                        'rgba(255, 206, 86, 0.8)',  // زرد
                        'rgba(54, 162, 235, 0.8)',  // آبی
                    ],
                    'borderColor' => [
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    'borderWidth' => 1,
                ],
            ],
            'labels' => [
                'Red',
                'Yellow',
                'Blue'
            ]
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
    protected static ?int $sort = 2; // اول نمایش داده شود

}
