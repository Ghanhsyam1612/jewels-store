<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminNotification extends Model
{
    protected $fillable = [
        'title',
        'message',
        'type',
        'customer_id',
        'is_read',
    ];
}
