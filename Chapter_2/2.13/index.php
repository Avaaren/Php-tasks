<?php

function findTwoMinAndMax($array) {
    $tmpMax = $array[1];
    $tmpMin = $array[1];
    $max = $array[0];
    $min = $array[0];
    # Также можно сделать с одной тмп переменной, но двумя циклами
    for ($i = 0; $i < sizeof($array); $i++) {

        if ($array[$i] > $max) {
            $tmpMax = $max;
            $max = $array[$i];
        }
        if ($tmpMax < $array[$i] && $array[$i] != $max) {
            $tmpMax = $array[$i];
        }

        if ($array[$i] < $min) {
            $tmpMin = $min;
            $min = $array[$i];
        }
        if ($tmpMin > $array[$i] && $array[$i] != $min ) {
            $tmpMin = $array[$i];
        }


    }
    echo "Два максимальных элемента: $tmpMax, $max <br>";
    echo "Два минимальных элемента: $tmpMin, $min <br>";
}

findTwoMinAndMax(array(-4,2,8,3,5,1));