<?php 

function checkNumberForCondition($number) {
    while ( $number > 1) {
        $lastDigit = $number % 10;
        if ($lastDigit != 0 && $lastDigit != 2 && $lastDigit != 3 && $lastDigit != 7){
            return false;
        }
        $number /= 10;
    }
    return true;
}

for ($i = 1000; $i < 10000; $i++) {
    if ( checkNumberForCondition($i) ) {
        echo "$i, ";
    }
}
