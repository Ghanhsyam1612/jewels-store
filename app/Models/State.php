<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'states';
    public $timestamps = false;

    // Relationships state has many cities
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    // Relationships state belongs to country
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
