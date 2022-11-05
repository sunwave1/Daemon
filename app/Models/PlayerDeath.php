<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerDeath extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(Player::class);
    }

    protected $dates = [
        'time'
    ];
    public $timestamps = false;
}
