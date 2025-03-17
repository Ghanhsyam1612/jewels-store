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

    protected $casts = [
        'price' => 'decimal:2',
        'total' => 'decimal:2',
        'quantity' => 'integer',    
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'diamond_type' => 'string',
        'diamond_id' => 'integer',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function diamond()
    {
        return $this->morphTo();
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
