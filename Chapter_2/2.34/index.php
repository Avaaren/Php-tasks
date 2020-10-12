<?php
function sortArray($array)
{
    $swapped = true;
    while ($swapped)
    {
        $swapped = false;
        for($i = sizeof($array) - 1; $i > 0; $i--)
        {
            if ( $array[$i] < $array[$i - 1] )
            {
                $tmp = $array[$i];
                $array[$i] = $array[$i - 1];
                $array[$i - 1] = $tmp;
                $swapped = true;
            }
        }
    }
    return $array;
}

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
    return $array;
}

$array = array(4,8,1,7,2);
$array = sortArray($array);
$array = insertInSortedArray($array, array(9,1,4));
print_r($array);