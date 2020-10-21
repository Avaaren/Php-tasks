<?php


function findMinAndMax($array) {
    $min = $array[0];
    $max = $array[0];

    for ($i = 0; $i < sizeof($array); $i++) {
        if ($max < $array[$i])
        {
            $max = $array[$i];
        }
        if ($min > $array[$i])
        {
            $min = $array[$i];
        }
    }
    return array('max' => $max, 'min' => $min);
}

function removeElementsBetween($array) {
    $minAndMax = findMinAndMax($array);

    for($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] == $minAndMax['min'])
        {
            $minPos = $i;
            for ($j = sizeof($array) - 1; $j > $i; $j--) {
                if ($array[$j] == $minAndMax['max'])
                {
                    $maxPos = $j;
                break;
                }
            }
        break;
        }
    }
    for ($i = $minPos + 1; $i < $maxPos; $i++) { 
        unset($array[$i]);
    }
    print_r($array);
}
removeElementsBetween(array(3,1,4,3,9,1,7));