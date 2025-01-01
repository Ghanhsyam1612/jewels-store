<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum OrderStatus : string implements  HasColor, HasIcon, HasLabel
{
    // case New = 'new';
    case PENDING = 'pending'; 
    case PROCESSING = 'processing';
    case SHIPPED = 'shipped';
    case COMPLETED = 'completed';
    // case CANCELLED = 'cancelled';
   
    public function getLabel(): string
    {
        return match ($this) {
            // self::New => 'New',
            self::PENDING => 'Pending',
            self::PROCESSING => 'Processing',
            self::SHIPPED => 'Shipped',
            self::COMPLETED => 'Completed',
            // self::CANCELLED => 'Cancelled',
        };
    }
    
    public function getColor(): string | array | null   
    {
        // return match ($this) {
        //     self::New => 'info',
        //     self::Processing => 'warning',
        //     self::Shipped, self::Delivered => 'success',
        //     self::Cancelled => 'danger',
        // };

        return match ($this) {
            // self::New => 'info',
            self::PENDING => 'warning',
            self::PROCESSING => 'info',
            self::SHIPPED => 'success',
            self::COMPLETED => 'success',
            // self::CANCELLED => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            // self::New => 'heroicon-m-sparkles',
            self::PENDING => 'heroicon-m-clock',
            self::PROCESSING => 'heroicon-m-arrow-path',
            self::SHIPPED => 'heroicon-m-truck',
            self::COMPLETED => 'heroicon-m-check-badge',
            // self::CANCELLED => 'heroicon-m-x-circle',
        };
    }
}
