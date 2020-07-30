<?php

function findMinAndMax($array) {
    $min = $array[0];
    $max = $array[0];
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    return array('max' => $max, 'min' => $min);
}

function replaceEvenAndOdds($array) {
    $minAndMax = findMinAndMax($array);
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] % 2 == 0) {
            $array[$i] = $minAndMax['max'];
        }
        if ($array[$i] % 2 != 0) {
            $array[$i] = $minAndMax['min'];
        }
    }
    print_r($array);
}
# -2 12 12 12 12 -2
replaceEvenAndOdds(array(3,-2,12,8,6,5));