<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brawler extends Model {


    public function attack_speed() {
        return $this->belongsTo(Speed::class, 'attack_speed_id', 'id');
    }

    public function movement_speed() {
        return $this->belongsTo(Speed::class, 'movement_speed_id', 'id');
    }
}
