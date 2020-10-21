<?php
// 25. В массив А(N) вставить после первого максимального элемента  k   минимальных элементов массива.  

function insertElement($array, $pos, $element) {
    array_push($array, 0);
    for ($i = sizeof($array)-1; $i >= 0; $i--) {
        if ( $i > $pos ) {
            $array[$i] = $array[$i - 1];
        }
        if ($i == $pos) {
            $array[$i] = $element;
        }
    }
    return $array; 
}

function findMaxAndMinElements($array) {
    $max = $array[0];
    $min = $array[0];
    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $array[$i] > $max ) {
            $max = $array[$i];
        }
        if ( $array[$i] < $min ) {
            $min = $array[$i];
        }
    }
    return array('max' => $max, 'min' => $min);
}

function insertMinElements($array, $k) {
    $minAndMax = findMaxAndMinElements($array);
    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $array[$i] == $minAndMax['max']) {
            for ($j = 0; $j < $k; $j++) {
                $array = insertElement($array, $i+1, $minAndMax['min']);
            }
        break;
        }
    }
    print_r($array);
}
# 2 1 9 -3 -3 -3 8 9 2 -3
insertMinElements(array(2,1,9,8,9,2,-3), 3);