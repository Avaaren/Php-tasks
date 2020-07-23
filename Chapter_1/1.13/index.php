<?php

function isSymmetric($number) {
    $reversedNumber = 0;
    $length = 0;
    $tmp = $number;

    while( $tmp >= 1 ) {
        $lastDigit = $tmp % 10;
        $reversedNumber = $reversedNumber * 10 + $lastDigit;
        $length++;
        $tmp /= 10;
    }

    if ( ($length % 2) != 0 || ($number != $reversedNumber)) {
        echo "$number not symmetric <br>";
        return false;
    }
    echo "$number and $reversedNumber <br>";
    echo "$number is symmetric <br>";
}
# True
isSymmetric(1331);
# False
isSymmetric(123123);