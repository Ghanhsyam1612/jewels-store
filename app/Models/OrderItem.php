<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'order_items';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function diamond()
    {
        return $this->belongsTo(Diamond::class);
    }

    public function getPriceAttribute($value)
    {
        return number_format($value, 2, '.', ',');
    }

    public function getTotalAttribute()
    {
        return $this->price * $this->quantity;
    }



}
