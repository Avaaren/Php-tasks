<?php 

function fact($number) {
    if ($number == 0) {
        return 1;
    }
    return fact($number - 1) * $number;
}

function sumOfFact($number) {
    $sum = 0;
    while ($number >= 1) {
        $lastDigit = $number % 10;
        $sum += fact($lastDigit);
        $number /= 10;
    }
    return $sum;
}

function findAllNumbers($start, $finish) {
    $sum = 0;
    $count = 0;
    for ($i = $start; $i < $finish; $i++) {
        if ( $i == sumOfFact($i) ) {
            $sum += $i;
            $count++;
            echo "i = $i , sum = ". sumOfFact($i) . "<br>";
        }
    }
    echo "count = $count, sum = $sum <br>";
}

findAllNumbers(1,3333333);
