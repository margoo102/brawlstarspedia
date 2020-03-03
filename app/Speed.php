<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speed extends Model {

    public function brawlerByAttack() {
        return $this->hasMany(Brawler::class, 'attack_speed_id');
    }

    public function brawlerByMovement() {
        return $this->hasMany(Brawler::class, 'movement_speed_id');
    }

}
