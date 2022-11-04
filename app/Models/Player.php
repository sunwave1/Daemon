<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'vocation'
    ];

    protected $visible = [
        'name',
        'group_id',
        'account_id',
        'level',
        'vocation',
        'health',
        'healthmax',
        'experience',
        'lookbody',
        'lookfeet',
        'lookhead',
        'looklegs',
        'looktype',
        'direction',
        'maglevel',
        'mana',
        'manamax',
        'manaspent',
        'soul',
        'town_id',
        'posx',
        'posy',
        'posz',
        'conditions',
        'cap',
        'sex',
        'lastlogin',
        'lastip',
        'save',
        'skull',
        'skulltime',
        'lastlogout',
        'blessings',
        'onlinetime',
        'deletion',
        'balance',
        'stamina',
        'skill_fist',
        'skill_club',
        'skill_sword',
        'skill_axe',
        'skill_dist',
        'skill_shielding',
        'skill_fishing',
        'skill_fist_tries',
        'skill_club_tries',
        'skill_sword_tries',
        'skill_axe_tries',
        'skill_dist_tries',
        'skill_shielding_tries',
        'skill_fishing_tries'
    ];

    public function namelocks(){
        return $this->hasMany(PlayerNameLock::class);
    }

    public function items(){
        return $this->hasMany(PlayerItem::class);
    }

    public function deaths(){
        return $this->hasMany(PlayerDeath::class);
    }

    public function storages(){
        return $this->hasMany(PlayerStorage::class);
    }

    public function spells(){
        return $this->hasMany(PlayerSpell::class);
    }

    public function depotlockeritems(){
        return $this->hasOne(PlayerDepotLockerItem::class);
    }

    public $timestamps = false;
}
