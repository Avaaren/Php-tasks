<?php

function insertElement($array, $pos, $element) {
    array_push($array, 0);
    for ($i = sizeof($array)-1; $i >= 0; $i--) {
        if ( $i > $pos ) {
            $array[$i] = $array[$i - 1];
        }
        if ($i == $pos) {
            $array[$i] = $element;
        }
    }
    return $array; 
}

function insertMaxAfterNegative($array) {
    $max = $array[0];
    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $array[$i] > $max ) {
            $max = $array[$i];
        }
    }
    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $array[$i] < 0 && $array[$i] % 2 == 0 ) {
            $array = insertElement($array, $i+1, $max);
        }
    }
    print_r($array);
}
# 3 9 1 -4 9 -1 -6 9 -4 9 3
insertMaxAfterNegative(array(3,9,1,-4, -1,-6, -4,3));