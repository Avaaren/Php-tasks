<?php

function findMinMultipleElement($array) {
    $nonUniqueElements = array();
    for ($i = 0; $i < sizeof($array); $i++) {
        $timesUsed = 0;
        for ($j = 0; $j < sizeof($array); $j++) {
            if ( $array[$i] == $array[$j] ) {
                $timesUsed++;
            }
        }
        if ( $timesUsed > 1 ) {
            array_push($nonUniqueElements, $array[$i]);
        }
    }
    $min = $nonUniqueElements[0];
    for ($i = 0; $i < sizeof($nonUniqueElements); $i++) {
        if ( $min > $nonUniqueElements[$i] ) {
            $min = $nonUniqueElements[$i];
        }
    }
    echo $min;
}
# -2
findMinMultipleElement(array(6,1,7,-2,-2,1,6));