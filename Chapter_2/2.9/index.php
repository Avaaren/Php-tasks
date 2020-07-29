<?php

function findMaxEvenAndMinOdd($array) {
    $min = $array[0];
    $max = $array[0];

    for ($i = 0; $i < sizeof($array); $i++) {
        # Предусмотрим ситуацию если первый элемент окажется минимальным
        # Или максимальным но не с той четностью
        if ($min % 2 == 0) {
            $min = $array[$i];
        }

        if ($min % 2 != 0) {
            $max = $array[$i];
        }
        # Ищем максимальный четный
        if ( $array[$i] % 2 == 0 ) {
            if ( $array[$i] > $max ) {
                $max = $array[$i];
            }
        }
        # Ищем максимальный нечетный
        else {
            if ( $array[$i] < $min ) {
                $min = $array[$i];
            }
        }
    }
    echo "Минимальный элемент = $min, максимальный = $max";
}   
# -3 и 10
findMaxEvenAndMinOdd(array(-14, 2,8,-3,7,99,10));