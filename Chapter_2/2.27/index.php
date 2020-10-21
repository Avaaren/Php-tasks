<?php

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
// 1234
function insertInSortedArray($array, $insertingArray) {
    for ($i = 0; $i < sizeof($insertingArray); $i++) {
        $is_inserted = false;
        for ($j = 0; $j < sizeof($array); $j++) {
            if ( $insertingArray[$i] <= $array[$j] ){
                $array = insertElement($array, $j, $insertingArray[$i]);
                $is_inserted = true;           
            break;
            }
        }
        if (!$is_inserted) {
            $array = insertElement($array, sizeof($array), $insertingArray[$i]);
        }
    }
    print_r($array);
}
# 1 2 2 3 4 6 7 8
insertInSortedArray(array(1,2,4,7), array(2,3,6,8));