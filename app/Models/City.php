<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'cities';
    public $timestamps = false;

    // Relationships city belongs to state
    public function state()
    {
        return $this->belongsTo(State::class);
    }   
}
