<?php

function findMinAndMax($array) {
    $min = $array[0];
    $indexOfMin = 0;
    $indexOfMax = 0;
    $max = $array[0];
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
            $indexOfMax = $i;
        }
        if ($array[$i] < $min) {
            $min = $array[$i];
            $indexOfMin = $i;
        }
    }
    return array('max' => $max, 'indexOfMax' => $indexOfMax, 'indexOfMin' => $indexOfMin,'min' => $min);
}

function findFirstNegtiveAndLastPositive($array) {
    $minAndMax = findMinAndMax($array);
    for ($i = 0; $i < $minAndMax['indexOfMin']; $i++) {
        if ($array[$i] < 0) {
            echo " Первый отрицательный элемент, предшествующий максимальному элементу = ". $array[$i] ."<br> ";
        break;
        }
    }

    for ($i = sizeof($array) - 1; $i > $minAndMax['indexOfMax']; $i--) {
        if ($array[$i] > 0) {
            echo "Последний положительный элемент,  стоящий за минимальным элементом = ". $array[$i] ."<br> ";
        break;
        }
    }
}
# -2, 8
findFirstNegtiveAndLastPositive(array(3,-2,4,12,8, -3));