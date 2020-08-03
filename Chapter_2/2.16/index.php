<?php

function findLongestSequance($array) {
    $currentLength = 1;
    $maxLength = 1;
    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $i > 0 && $array[$i] == $array[$i - 1] ) {
            $currentLength++;
        }
        else {
            if ( $maxLength < $currentLength ) {
                $maxLength = $currentLength;
            }
            $currentLength = 1;
        }
    }
    echo "Максимальная длина последовательности одинаковых элементов = $maxLength <br>";
}

findMaxPosl(array(4,8,1,1,1,3,4,4,7));