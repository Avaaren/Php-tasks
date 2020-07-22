<?php 

function isIncreasingSequance($number) {
    while ( $number / 10 >= 1 ) {
        if (!( ($number / 10 % 10) > ($number % 10) )) {
            return false;
        }
        $number /= 10;
    }
    return true;
}

function isDecreasingSequance($number) {
    while ( $number / 10 >= 1 ) {
        if (!( ($number / 10 % 10) < ($number % 10) )) {
            return false;
        }
        $number /= 10;
    }
    return true;
}

for ($i = 1000; $i < 10000; $i++) {
    if ($i % 2 == 0) {
        if (isIncreasingSequance($i) or isDecreasingSequance($i)){
            echo "$i, ";
        }
    }
}