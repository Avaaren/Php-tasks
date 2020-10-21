<?php

function findCountOfSimilarNeighbours($array) {
    $counter = 0;
    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $i > 0 && ($array[$i] == $array[$i-1]) ) {
            $counter++;
        }
    }
    echo "Количество одинаковых соседей = $counter";
}
# 2
findCountOfSimilarNeighbours(array(4,4,3,1,9,9));
