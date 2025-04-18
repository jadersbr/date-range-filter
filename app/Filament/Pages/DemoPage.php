<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard\Actions\FilterAction;
use Filament\Pages\Dashboard\Concerns\HasFiltersAction;
use Filament\Pages\Page;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Malzariey\FilamentDaterangepickerFilter\Fields\DateRangePicker;

class DemoPage extends Page
{
    use HasFiltersAction;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.demo-page';

    protected function getHeaderActions(): array
    {
        return [
            FilterAction::make()
                ->form([
                    DateRangePicker::make('period')
                ])
        ];
    }
}
