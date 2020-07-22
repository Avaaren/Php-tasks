<?php

function getSumOfDigits($number) {
    $sum = 0;
    while ($number >= 1) {
        $sum = $sum + ($number % 10);
        $number /= 10;
    }
    return $sum;
}

function getAllMathcingNumbers($start, $finish) {
    for ($i = $start; $i < $finish; $i++) {
        if ( $i % getSumOfDigits($i) == 0 ) {
            echo "$i, ";
        }
    }
}

getAllMathcingNumbers(1, 1000);