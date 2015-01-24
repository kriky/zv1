<?php

class Category extends \Eloquent {

    protected $fillable = [];
    protected $table = 'categories';
    public function users() {
        return $this->belongsToMany('User');
    }

}
