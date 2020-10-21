<?php

function findMax($array) {
    $max = $array[0];
    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $max < $array[$i] ) {
            $max = $array[$i];
        }
    }
    return $max;
}
function digitLength($digit) {
    $counter = 0;
    while ($digit >= 1) {
        $digit /= 10;
        $counter++;
    }
    return $counter;
}

function removeElements($array, $k) {
    $size = sizeof($array);
    $max = findMax($array);
    print_r($array);
    for ($i = 0; $i < $size; $i++) {
        if ($array[$i] == $max) {
            for ($j = $i; $j < $size; $j++) {
                if ( digitLength($array[$j]) == $k ) {
                    unset($array[$j]);
                }
            }
        break;
        }
    }
    print_r($array);
}
# 12 341 45 999 313 999 390
$testingArray = array(12, 341, 45, 999, 313, 21, 65, 999, 390, 22);
removeElements($testingArray, 2);