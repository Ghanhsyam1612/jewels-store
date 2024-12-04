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
            'PRINCESS' => 'Shape/princess.svg',
            'RADIANT' => 'Shape/radiant.svg',
            'ASSCHER' => 'Shape/asscher.svg',
            'OVAL' => 'Shape/oval.svg',
            'EMERALD' => 'Shape/emerald.svg',
            'MARQUISE' => 'Shape/marquise.svg',
            'HEART' => 'Shape/heart.svg',
            'ROSE_CUT' => 'Shape/rose-cut.svg',
            'OLD_EUROPEAN' => 'Shape/old-european.svg',
            'HALF_MOON' => 'Shape/half-moon.svg',
            'BAGUETTE_TRAPEZOID' => 'Shape/baguette-trapezoid.svg',
            'BAGUETTE' => 'Shape/baguette.svg',
            'HEXAGON' => 'Shape/hexagon.svg',
            'KITE' => 'Shape/kite.svg',
            'OLD_MINE' => 'Shape/old-mine.svg',
            'TRAPEZOID' => 'Shape/trapezoid.svg',
            'TRIANGULAR' => 'Shape/triangular.svg',
        ];

        return $shapeSvgs[ucfirst($this->shape)] ?? 'Shape/default.svg';
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
