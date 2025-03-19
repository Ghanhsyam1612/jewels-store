<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $guarded = [];
    protected $table = 'subscriptions';

    protected $casts = [
        'current_period_start' => 'datetime',
        'current_period_end' => 'datetime',
        'canceled_at' => 'datetime',
        'cancel_at_period_end' => 'boolean',
    ];
    
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function isActive()
    {
        return $this->status === 'active' || $this->status === 'trialing';
    }

    public function isCanceled()
    {
        return $this->canceled_at !== null;
    }

    public function isOnGracePeriod()
    {
        return $this->isCanceled() && $this->isActive();
    }
}