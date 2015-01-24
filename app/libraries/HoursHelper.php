<?php

class HoursHelper extends \Eloquent {

    public static function getHoursWithNotes($posjeduje, $polaze) {
        

    
    
        $theoryhours = TheoryHelper::whereName($polaze)->first()->$posjeduje;
        if (str_contains($theoryhours, '/')) {
            $theoryhours = explode('/', $theoryhours);
            $theoryhours = array('hours' => $theoryhours['0'], 'note' => CategoryNotes::whereNote_num($theoryhours['1'])->first()->note);
        } else {
            $theoryhours = array('hours' => $theoryhours);
        }

        $drivinghours = DrivingHelper::whereName($polaze)->first()->$posjeduje;
        if (str_contains($drivinghours, '/')) {
            $drivinghours = explode('/', $drivinghours);
            $drivinghours = array('hours' => $drivinghours['0'], 'note' => CategoryNotes::whereNote_num($drivinghours['1'])->first()->note);
        } else {
            $drivinghours = array('hours' => $drivinghours);
        }
        return array('theory' => $theoryhours, 'driving' => $drivinghours);
    }

}
