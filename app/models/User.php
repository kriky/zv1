<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait,
        HasRole;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    # Relacije
    public function profile() {
        return $this->hasOne('Profile');
    }

    public function categories() {
        return $this->belongsToMany('Category');
    }

    protected $hidden = array('password', 'remember_token');

    public static function createUser() {

        $user = new User();
        $user->email = Input::get('email');
        $user->password = Hash::make('123');
        $user->save();
        $user->attachRole(Input::get('role'));

     //   $user = User::whereEmail(Input::get('email'))->first();
        $profile = new Profile();
        $profile->ime = Input::get('ime');
        $profile->prezime = Input::get('prezime');
        $profile->ime_roditelja = Input::get('ime_roditelja');
        $profile->datum_rodenja = Input::get('datum_rodenja');
        $profile->adresa = Input::get('adresa');
        $profile->grad = Input::get('grad');
        $profile->telefon = Input::get('telefon');
        $profile->mobitel = Input::get('mobitel');
        $profile->oib = Input::get('oib');
        $profile->spol = Input::get('spol');
        $profile->napomena = Input::get('napomena');
      
        $profile = $user->profile()->save($profile);



    }

    public static function deleteUser($id) {
        
    }

}
