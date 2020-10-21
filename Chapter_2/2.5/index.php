<?php

function swapMinAndMax($array) {
    $max = $araay[0];
    $min = $array[0];
    $indexOfMax = 0;
    $indexOfMin = 0;
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
            $indexOfMax = $i;
        }
        if ($array[$i] < $min) {
            $min = $array[$i];
            $indexOfMin = $i;
        }
    }
    $array[$indexOfMax] = $min;
    $array[$indexOfMin] = $max;
    print_r($array);
}
# 4 5 8 7 7 7 1
swapMinAndMax(array(4,5,1,7,7,7,8));
