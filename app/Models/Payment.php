<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'payments';

    protected $casts = [
        'payment_details' => 'array',
        'payment_date' => 'datetime',
        'refund_date' => 'datetime',
    ];
    // Payment Status
    static $PAYMENT_STATUS_PENDING = 'pending';
    static $PAYMENT_STATUS_COMPLETED = 'completed';
    static $PAYMENT_STATUS_FAILED = 'failed';

    // Refund Status
    static $REFUND_STATUS_PENDING = 'pending';
    static $REFUND_STATUS_REFUNDED = 'refunded';
    static $REFUND_STATUS_FAILED = 'failed';
    static $REFUND_STATUS_CANCELLED = 'cancelled';
    static $REFUND_STATUS_REFUNDED_PARTIALLY = 'refunded_partially';
    static $REFUND_STATUS_REFUNDED_FULLY = 'refunded_fully';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getAmountAttribute($value)
    {
        return number_format($value, 2, '.', ',');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
