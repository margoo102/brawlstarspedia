<?php

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    public function items() {
        return $this->morphedByMany('App\Item', 'taggable');
    }

    public function galleries() {
        return $this->morphedByMany('App\Gallery', 'taggable');
    }

}
