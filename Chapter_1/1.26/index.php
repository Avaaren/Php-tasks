<?php 

function getSumOfDividers($number) {
    $sum = 0;

    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum;
}

function getNumberWithMaxSumOfDividers($start, $finish) {
    $max = 0;
    for ($i = $start; $i < $finish; $i++) {
        if ( getSumOfDividers($i) > getSumOfDividers($max) ) {
            $max = $i;
        }
    }
    echo "Число с максимальной суммой делителей - $max";
}

getNumberWithMaxSumOfDividers(1, 1277);
