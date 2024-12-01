<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diamond extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'diamonds';

    protected $casts = [
        'images' => 'json',
        'video_url' => 'json',
    ];

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
