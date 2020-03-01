<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function tags() {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
