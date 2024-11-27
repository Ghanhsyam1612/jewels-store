<?php

namespace App\Filament\Resources\DiamondResource\Pages;

use App\Filament\Resources\DiamondResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiamond extends EditRecord
{
    protected static string $resource = DiamondResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
