<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {

    public function owner() {
        return $this->belongsTo('App\User');
    }

    public function tags() {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
