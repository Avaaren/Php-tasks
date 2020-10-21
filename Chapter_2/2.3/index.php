<?php

function swapElements($array) {
    $tmp = 0;
    $indexOfSwap = -1;
    $swapped = false;

    print_r($array);
    # Свап происходит только если: Он еще не был произведен,
    # Переменная для свапа назначена и она противоположного знака текущей
    for ($i = 0; $i < count($array); $i++) {
    # Для свапа местами будем использовать $tmp и $indexOfSwap
    # Взаимодействуем с переменной только если свапа еще не было
        if ($array[$i] > 0 && $swapped == false) {
            # Если индекс переменной еще не назначен, назначаем 
            if ( $indexOfSwap == -1 ) {
                $tmp = $array[$i];
                $indexOfSwap = $i;
            }
            # Если назначен, то проверяем знак на противоположный
            # Если да, то свапаем, если нет, то переменная еще не найдена
            elseif ($tmp < 0) {
                $array[$indexOfSwap] = $array[$i];
                $array[$i] = $tmp;
                $swapped = true;
            }
        }

        if ($array[$i] < 0 && $swapped == false) {
            if ( $indexOfSwap == -1 ) {
                $tmp = $array[$i];
                $indexOfSwap = $i;
            }
            elseif ($tmp > 0) {
                $array[$indexOfSwap] = $array[$i];
                $array[$i] = $tmp;
                $swapped = true;
            }
        }
    }
    if( $swapped ) {
        print_r($array);
    }
    else {
        echo "Массив не подходил под условия <br>";
    }
    
}

swapElements(array(9,1,4,8,4,3));
