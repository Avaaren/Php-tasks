<?php

function findMin($array) {
    $max = $array[0] + $array[1];
    $min = $array[0] + $array[1];
    $indexOfMax = 0;
    $indexOfMin = 1;
    # Нельзя искать максимальную сумму относительно последнего
    # И минимальную сумму относительно первого
    # Поэтому используем $i - 1
    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $i > 0 && ($array[$i - 1] + $array[$i] > $max) ) {
            $max = $array[$i - 1] + $array[$i];
            $indexOfMax = $i - 1;
        }
        elseif ( $i > 0 && ($array[$i - 1] + $array[$i] < $min) ) {
            $min = $array[$i - 1] + $array[$i];
            $indexOfMin = $i;
        }
    }
    echo "Индекс элемента с максимальной суммой $indexOfMax <br>";
    echo "Индекс элемента с минимальной суммой $indexOfMin <br>";
}
# 4 , 3
findMin(array(4,4,3,1,9,9));
