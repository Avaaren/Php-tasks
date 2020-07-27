<?php

$array = array(1,2,3,4,5,6);
function getBArray($array) {
    for ($i = 0; $i < count($array); $i++) {
        $sum = 0;
        for ($j = 0; $j <= $i; $j++) {
            $sum += $array[$j];
        }
        $B[] = $sum / $j;
    }
    print_r($B);
}

getBArray($array);