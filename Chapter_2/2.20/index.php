<?php

function findUniqueElements($array) {
    for ($i = 0; $i < sizeof($array); $i++) {
        $timesUsed = 0;
        for ($j = 0; $j < sizeof($array); $j++) {
            if ( $array[$i] == $array[$j] ) {
                $timesUsed++;
            }
        }
        if ( $timesUsed == 1 ) {
            echo "$array[$i] ";
        }
    }
    
}
findUniqueElements(array(3,7,1,9,1,7));