<?php

class DrivingHelper extends \Eloquent {

    protected $fillable = [];
    protected $table = 'driving_hours_helper';

    public static function getHours($posjeduje, $polaze) {
        $hours = DrivingHelper::whereName($polaze)->first()->$posjeduje;

        if (str_contains($hours, '/')) {
            $hours = explode('/', $hours);
            $note = CategoryNotes::whereNote_num($hours['1'])->first()->note;
            return array('hours' => $hours['0'], 'note' => $note);
        }
        return array('hours' => $hours);
    }

    public static function getCategoriesAvailable($category) {
        return DrivingHelper::whereNotNull($category)->lists('name');
    }

    public static function getCategoriesAll() {
        return DrivingHelper::all()->lists('name');
    }

}
