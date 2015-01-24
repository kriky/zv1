<?php

class TheoryHelper extends \Eloquent {

    protected $fillable = [];
    protected $table = 'theory_hours_helper';

    
public static function getHours($posjeduje, $polaze) {
        $hours = TheoryHelper::whereName($polaze)->first()->$posjeduje;

        if (str_contains($hours, '/')) {
            $hours = explode('/', $hours);
            $note = CategoryNotes::whereNote_num($hours['1'])->first()->note;
            return array('hours' => $hours['0'], 'note' => $note);
        }
        return array('hours' => $hours);
    }

}
