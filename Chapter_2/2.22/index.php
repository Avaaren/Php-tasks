<?php

function findMaxElement($array) {
    $max = $array[0];
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] > $max) 
        {
            $max = $array[$i];
        }
    }
    return $max;
}

function findUniqueElements($array) {
    $uniqueElements = array();

    for ($i = 0; $i < sizeof($array); $i++) {
        $timesUsed = 0;
        for ($j = 0; $j < sizeof($array); $j++) {
            if ( $array[$i] == $array[$j] )
            {
                $timesUsed++;
            }
        }
        if ( $timesUsed == 1 )
        {
            array_push($uniqueElements, $array[$i]);
        }
    }
    $max = findMaxElement($uniqueElements);
    echo "Максимальный уникальный элемент = $max";
    
}
findUniqueElements(array(3,7,11,9,1,11,7));