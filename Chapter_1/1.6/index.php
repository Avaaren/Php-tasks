<?php 

function checkNumberForCondition($number) {
    $tmp = $number;
    while ( $tmp >= 1) {
        $lastDigit = $tmp % 10;
        if ($lastDigit != 0 && $lastDigit != 2 && $lastDigit != 3 && $lastDigit != 7){
            return false;
        }
        $tmp /= 10;
    }
    while ($number >= 1) {
        $lastDigit = $number % 10;
        $innerNumber = $number / 10;
        while ($innerNumber >= 1) {
            if ($lastDigit == ($innerNumber % 10)){
                return false;
            }
            $innerNumber /= 10;
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
