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

    // Function to get SVG path dynamically
    public function getShapeSvgAttribute()
    {
        $shapeSvgs = [
            'ROUND' => 'Shape/round.svg',
            'CUSHION' => 'Shape/cushion.svg',
            'PEAR' => 'Shape/pear.svg',
        ];

        return $shapeSvgs[ucfirst($this->shape)] ?? 'Shape/default.svg';
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
