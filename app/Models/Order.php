<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'orders';

    // Shipping Status
    static $SHIPPING_STATUS_PENDING = 'pending';
    static $SHIPPING_STATUS_PROCESSING = 'processing';
    static $SHIPPING_STATUS_SHIPPED = 'shipped';
    static $SHIPPING_STATUS_COMPLETED = 'completed';
    static $SHIPPING_STATUS_CANCELLED = 'cancelled';

    // Payment Status
    static $PAYMENT_STATUS_PENDING = 'pending';
    static $PAYMENT_STATUS_COMPLETED = 'completed';
    static $PAYMENT_STATUS_FAILED = 'failed';

    protected $casts = [
        'order_date' => 'datetime',
        'shipping_address' => 'array',
        'billing_address' => 'array',
    ];

    


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

        public function items()
        {
            return $this->hasMany(OrderItem::class);
        }

    public function payments()
    {
        return $this->hasOne(Payment::class);
    }

    public static function iconForNewOrderCount($count)
    {
        return $count > 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down';
    }

    public static function iconForTotalOrderCount($count)
    {
        return $count > 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down';
    }

    public static function iconForTotalRevenue($count)
    {
        return $count > 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down';
    }
    

    public function getFullNameAttribute()
    {
        if ($this->customer) {
            return trim("{$this->customer->first_name} {$this->customer->last_name}");
        }
        return 'Guest';
    }

}
