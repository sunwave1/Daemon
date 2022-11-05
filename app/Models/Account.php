<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Account extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    public function characters(){
        return $this->hasMany(Player::class);
    }

    public $timestamps = false;
}
