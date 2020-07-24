<?php

function findTwins($start, $finish) {
    # По условию ряд равен n -> 2n1
    for ($i = $start; $i < 2 * $finish; $i++) {
        if (isSimple($i)) {
            # Ищем все простые числа, которые могут быть близнецами
            for ($j = 0; $j < $i; $j++) {
                # И провяем их разность
                if ( isSimple($j) && ($i - $j == 2) ){
                    echo "$i и $j простые близнецы <br>";
                }
            }
        }
    }
}

function isSimple($number) {
    $is_simple = true;
    for ($i = 2; $i < $number; $i++) {
        if ( ($number % $i) == 0) {
            $is_simple = false;
        }
    }
    return $is_simple;
}

findTwins(123, 441);