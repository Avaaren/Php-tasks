<?php

function isAuthomorphic($number) {
    $numberSquare = $number * $number;
    echo "$number is ";
    while ($number >= 1 ) {
        if ( ($number % 10) != ($numberSquare % 10) ) {
            echo "not authomorphic <br>";
            return false;
        }
        $number /= 10;
        $numberSquare /= 10;
    }
    echo "authomorphic <br>";
}

isAuthomorphic(25);
isAuthomorphic(43); 
isAuthomorphic(1);