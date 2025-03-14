<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $timestamps = false;
    protected $table = 'countries';

    // Relationships country has many states
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
