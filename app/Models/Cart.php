<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'carts';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function diamond()
    {
        return $this->belongsTo(Diamond::class, 'diamond_id');
    }
}
