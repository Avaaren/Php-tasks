<?php 

function isSimple($number) {
    $is_simple = true;
    for ($i = 2; $i < $number; $i++) {
        if ( ($number % $i) == 0) {
            $is_simple = false;
        }
    }
    return $is_simple;
}

function getSumOfSimpleDividers($number) {
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        # Проверяем является ли $i делителем $number
        if ($number % $i == 0) {
            # Если является, то простой ли он
            if ( isSimple($i) ) {
                $sum += $i;
            }
        }
    }
    return $sum;
}

function getNumberWithMaxSumOfDividers($start, $finish) {
    $max = 0;
    for ($i = $start; $i < $finish; $i++) {
        if ( getSumOfSimpleDividers($i) > getSumOfSimpleDividers($max) ) {
            $max = $i;
        }
    }
    echo "Число с максимальной суммой простых делителей - $max";
}

getNumberWithMaxSumOfDividers(1, 1277);
