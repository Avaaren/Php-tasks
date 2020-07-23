<?php 

function checkNumberForCondition($number) {
    $sum = 0;
    while ( $number >= 1) {
        $lastDigit = $number % 10;
        # Ecxluding exceptions
        if ($lastDigit == ($number / 10 % 10)) {
            return false;
        }
        # Counting sum
        $sum += $lastDigit;
        # Get all numbers with this digits
        if ($lastDigit != 0 && $lastDigit != 2 && $lastDigit != 3 && $lastDigit != 7){
            return false;
        }
        $number /= 10;
    }
    # Excluding duplicates
    if ($sum != 12) {
        return false;
    }
    return true;
}

for ($i = 1000; $i < 10000; $i++) {
    if ( checkNumberForCondition($i) ) {
        echo "$i, ";
    }
}
