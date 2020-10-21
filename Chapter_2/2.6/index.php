<?php

function findMaxEvenValue($array, $lastValue = 10) {
    $max = $array[0];
    $has_even = false;
    for ($i = 0; $i < sizeof($array); $i++) {
        # Предусматриваем ситуацию, если массив не имеет четных чисел
        if ($array[$i] % 2 == 0) {
            $has_even = true;
        }
        # Ели прошлое максимальное число было нечетым, то не учитываем его
        if ($array[$i] > $max && $array[$i] < $lastValue) {
            $max = $array[$i];
        }
    }
    # Если максимальное число нечетное, то ищем другое - четное
    if ($max % 2 != 0) {
        findMaxEvenValue($array, $max);
    }
    # Возвращаем значение только если массив имеет четный элемент 
    if ($has_even) {
        return $max;
    }
    else {
        echo "Нет четных чисел";
        exit();
    }
}

function replaceMaxByTheirIndexes($array) {
    $max = findMaxEvenValue($array);
    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $array[$i] == $max ) {
            $array[$i] = $i;
        }
    }
    print_r($array);
}
# 7 1 5 4 4 1 6
replaceMaxByTheirIndexes(array(7,8,5,4,8,1,8));