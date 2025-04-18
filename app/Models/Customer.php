<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $guarded = [];

    protected $table = 'customers';

    public function addresses(): BelongsToMany
    {
        return $this->belongsToMany(Address::class, 'customer_addresses')
            ->withPivot('address_type', 'is_default')
            ->withTimestamps();
    }

    public function shippingAddresses(): BelongsToMany
    {
        return $this->belongsToMany(Address::class, 'customer_addresses')
            ->wherePivot('address_type', 'shipping')
            ->withPivot('is_default')
            ->withTimestamps();
    }

    public function billingAddresses(): BelongsToMany
    {
        return $this->belongsToMany(Address::class, 'customer_addresses')
            ->wherePivot('address_type', 'billing')
            ->withPivot('is_default')
            ->withTimestamps();
    }

    public function getDefaultShippingAddressAttribute()
    {
        return $this->shippingAddresses()->wherePivot('is_default', true)->first();
    }

    public function getDefaultBillingAddressAttribute()
    {
        return $this->billingAddresses()->wherePivot('is_default', true)->first();
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // public function addresses()
    // {
    //     return $this->hasMany(Address::class);
    // }

    // public function getFullAddressAttribute()
    // {
    //     $address = $this->addresses;

    //     if ($address) {
    //         return $address->address_line_1 . ', ' .
    //             $address->address_line_2 . ', ' .
    //             $address->city->name . ', ' .
    //             $address->state->name . ', ' .
    //             $address->country->name . ' - ' .
    //             $address->zip_code;
    //     }

    //     return 'Address not available';
    // }

    public static function iconForCustomerCount($count)
    {
        return $count > 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down';
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function currentSubscription()
    {
        return $this->subscriptions()
            ->where(function ($query) {
                $query->where('status', 'active')
                    ->orWhere('status', 'trialing');
            })
            ->latest()
            ->first();
    }

    public function hasActiveSubscription()
    {
        return $this->currentSubscription() !== null;
    }
}
