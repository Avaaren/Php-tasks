<?php

$arr = array(2,4,1,7,-2,11,3);

function findCountBeforeNegtive($array) {
    $counter = 0;
    for($i = 0; $i < count($array); $i++) {
        if ($array[$i] < 0) {
            echo "До первого отрицательного числа $counter элементов <br>";
            return true;
        }
        $counter++;
    }
    echo "Отрицательных чисел нету <br>";
    return false;
}

function findSumOfOddAfterLastNegative($array) {
    $sum = 0;
    for($i = count($array) - 1; $i >= 0; $i--) {
        if ($array[$i] < 0) {
            echo "Cумма после последнего отрицательного элемента = $sum <br>";
            return true;
        }
        $sum += $array[$i];
    }
    echo "Отрицательных чисел нету <br>";
    return false;
}

findCountBeforeNegtive($arr);
findSumOfOddAfterLastNegative($arr);