<?php

class Profile extends \Eloquent {

    protected $fillable = [];
    protected $table = 'users_profiles';

    public function user() {
        return $this->hasOne('User');
    }

}
