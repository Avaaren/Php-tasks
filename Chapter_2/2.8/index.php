<?php

function swapNegativeAndMax($array) {
    $max = $array[0];
    $indexOfMax = 0;
    $is_swapped = false;
    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $array[$i] > $max ) {
            $max = $array[$i];
            $indexOfMax = $i;
        }
    }
    for ($i = sizeof($array)-1; $i >= 0; $i--) {
        if ($array[$i] < 0 && !$is_swapped) {
            $array[$indexOfMax] = $array[$i];
            $array[$i] = $max;
            $is_swapped = true;
        }
    }
    if (!$is_swapped) {
        echo "Нету отрицательного элемента";
        exit();
    }
    print_r($array);
}
# 2 -4 5 -1 9
swapNegativeAndMax(array(2,9,5,-1, -4));