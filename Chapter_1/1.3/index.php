<?php

function isIncreasingSequance($number) {
    echo "Number is $number <br>";
    while ( $number / 10 > 1 ) {
        if (!( ($number / 10 % 10) < ($number % 10) )) {
            echo "Not increasing <br>";
            return false;
        }
        $number /= 10;
    }
    echo "Increasing <br>";
    return true;
}

isIncreasingSequance(12345);
isIncreasingSequance(123547382);
