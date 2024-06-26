<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Vedio extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-film';

    protected static string $view = 'filament.pages.vedio';
    protected static ?int $navigationSort = 3;
}
