<?php

function isPalindrome($number) {
    $tmp = $number;
    $reversedNumber = 0;
    # If number is palindrome -> number == reversed number
    # That, reverse our tmp number and compare with original 
    while ($tmp >= 1) {
        $lastDigit = $tmp % 10;
        $reversedNumber = $reversedNumber * 10 + $lastDigit;
        $tmp /= 10;
    }
    if ($reversedNumber != $number) {
        return false;
    }
    return true;
}

function findAllSquarePalindromes($number) {
    # Find all palindromes in range 0 - number
    for ($i = 0; $i < $number; $i++) {
        if ( isPalindrome($i) ) {
            if ( isPalindrome($i * $i) ) {
                echo "$i is pal and " . $i* $i. " is pal <br>";
            }
        }
    }
}

findAllSquarePalindromes(1000);