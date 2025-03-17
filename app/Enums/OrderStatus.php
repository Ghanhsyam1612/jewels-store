<?php

namespace App\Enums;
enum OrderStatus : string 
{
 
    case PENDING = 'pending'; 
    case PROCESSING = 'processing';
    case SHIPPED = 'shipped';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';
   
    
    public function getColor(): string | array | null   
    {
      
        return match ($this) {
            self::PENDING => 'warning',
            self::PROCESSING => 'info',
            self::SHIPPED => 'success',
            self::COMPLETED => 'success',
            self::CANCELLED => 'danger',
        };
    }

}
