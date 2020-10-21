<?php

function findCountOfUniqueElements($array) {
    $count = 0;
    $checkedElements = array();
    for ($i = 0; $i < sizeof($array); $i++) {
        $is_checked = false;
        for ($j = 0; $j < sizeof($checkedElements); $j++) {
            if ($array[$i] == $checkedElements[$j]) {
                $is_checked = true;
            break;
            }
        }
        if ( !$is_checked ) {
            $count++;
        }
        array_push($checkedElements, $array[$i]);
    }
    echo "$count";
}

// В данной версии решения различные == все, которые еще не встречались ранее
findCountOfUniqueElements(array(3, 6, 2, 3, 8, 6, 1));
// 5
