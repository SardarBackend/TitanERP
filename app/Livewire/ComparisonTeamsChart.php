<?php

namespace App\Livewire;

use Filament\Widgets\ChartWidget;

class ComparisonTeamsChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [20, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['فنی' , 'اداری'],
        ];
    }

    public function getColumnSpan(): int
    {
        return 2;
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
