<?php

namespace App\Filament\Resources\DiamondResource\Pages;

use App\Filament\Resources\DiamondResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiamonds extends ListRecords
{
    protected static string $resource = DiamondResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
