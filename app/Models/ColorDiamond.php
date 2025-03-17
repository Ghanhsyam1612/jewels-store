<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ColorDiamond extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'color_diamonds';

    protected $casts = [
        'image_link' => 'array',
        'video_url' => 'json',
        'certificate_link' => 'json'
    ];


    // Relationship to wishlists
    public function wishlists()
    {
        return $this->morphMany(Wishlist::class, 'wishlistable');
    }

    public function isInWishlist($customerId)
    {
        return $this->wishlists()->where('customer_id', $customerId)->exists();
    }
    // Relationship to Cart
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orderItems()
    {
        return $this->morphMany(OrderItem::class, 'diamond');
    }

    // Function to get SVG path dynamically
    public function getColorShapeSvgAttribute()
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
            'ROSE' => 'Shape/rose-cut.svg',
            'TRAPEZOID' => 'Shape/trapezoid.svg',
            'TRIANGULAR' => 'Shape/triangular.svg',
            'TRILLIANT' => 'Shape/trilliant.svg',
            'FLOWER' => 'Shape/flower.svg'
            //  'ASHOKA' => 'Shape/ashoka.svg'


        ];

        return $shapeSvgs[ucfirst($this->shape)] ?? 'Shape/default.svg';
    }

    // Function to get cut description dynamically
    public function getColorCutDescriptionAttribute()
    {
        $descriptions = [
            'GOOD' => 'Quality cut with good proportions to return most light that enters.',
            'VERY GOOD' => 'High-quality cut with good proportions that return almost all light that enters.',
            'EXCELLENT' => 'High-quality cut with near-perfect proportions that return nearly all light that enters.',
            'IDEAL' => 'Perfectly-proportioned to return all light that enters for maximum fire. Only 5% of mined diamonds meet this standard.',
        ];

        return $descriptions[$this->cut] ?? 'Description not available for this cut.';
    }
    // Function to get clarity description dynamically
    public function getColorClarityDescriptionAttribute()
    {
        $descriptions = [
            'I2' => 'Flawless, the highest clarity grade, with no visible inclusions or blemishes.',
            'I1' => 'Included. Inclusions are very easy to see under 10x magnification and may be seen with the naked eye.',
            'SI2' => 'Slightly included with more inclusions than SI1. Easily seen by an expert under 10x magnification but difficult to see with the naked eye.',
            'SI1' => 'Slightly included. Easily seen by an expert under 10x magnification but difficult to see with the naked eye',
            'SI3' => 'Flawless, the highest clarity grade, with no visible inclusions or blemishes.',
            'VS1' => 'Very slightly included. Easier for an expert to see inclusions under 10x magnification, and generally not visible to the naked eye.',
            'VS2' => 'Very slightly included. Easier for an expert to see inclusions under 10x magnification, and generally not visible to the naked eye; slightly more inclusions than VS1.',
            'VVS1' => 'Very, very slightly included. Extremely small inclusions are difficult for an expert to see under 10x magnification and invisible to the naked eye',
            'VVS2' => 'Very, very slightly included. Extremely small inclusions are difficult for an expert to see under 10x magnification and invisible to the naked eye; slightly more inclusions than VVS1.',
            'IF' => 'Internally flawless. The highest clarity grade, with no flaws or inclusions. Very rare and expensive.',
            'FL' => 'Flawless. The highest clarity grade, with no visible inclusions or blemishes.',
        ];

        return $descriptions[$this->clarity] ?? 'Description not available for this clarity.';
    }

    // Function to get intensity description dynamically
    public function getIntensityDescriptionAttribute()
    {
        $descriptions = [
            'FANCY LIGHT' => 'A light form of intensity that can be seen with the naked eye. Fancy Light diamonds allow for maximum light performance, while also showing significant color.',
            'FANCY' => 'The “Fancy” intensity indicates the diamond has significant color. The shade of the color is neither light nor too intense.',
            'FANCY INTENSE' => 'Fancy Intense indicates very significant color. The color intensity can be clearer seen, as the color saturation is much more intense than the “Fancy” intensity grade.',
            'FANCY VIVID' => 'As the name indicated Fancy Vivid color diamonds have very strong color saturation. The Fancy Vivid is often the most expensive intensity grade.',
            'FANCY DEEP' => 'On of the darkest color tones available. Fancy Deep diamonds have almost full color saturation.',
            'FANCY DARK' => 'The most intense color tone available. Fancy Dark diamond have full color saturation with minimal room for additional light properties. ',
        ];

        return $descriptions[$this->intensity] ?? 'Description not available for this clarity.';
    }
}
