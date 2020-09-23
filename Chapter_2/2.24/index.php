<?php

function findLongestZeroPart($array) {
    $tmp = 0;
    $maxLength = 0;
    $currentLength = 0;
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] == 0) {
            if ( $currentLength == 0 ){
                $tmp = $i;
            }
            $currentLength++;
        }
        else {
            if ( $maxLength < $currentLength ) {
                $maxLength = $currentLength;
                $startIndex = $tmp;
                $finalIndex = $i - 1;
            }
            $currentLength = 0;
        }
    }
    echo "Максимальная длина = $maxLength, начало: $startIndex, конец: $finalIndex"; 
}
# 3, 4 to 6
findLongestZeroPart(array(1,0,0,2,0,0,0,2,0,1));