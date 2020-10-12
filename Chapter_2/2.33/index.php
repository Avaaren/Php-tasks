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

function sortPositives($array)
{
    $swapped = true;
    while ($swapped)
    {
        $swapped = false;
        $prevIndex = -1;
        for($i = 0; $i < sizeof($array); $i++)
        {
            if ( $array[$i] > 0 )
            {
                if ( $prevIndex != $i && $prevIndex != -1 )
                {
                    if ( $array[$prevIndex] > $array[$i] )
                    {
                        $tmp = $array[$i];
                        $array[$i] = $array[$prevIndex];
                        $array[$prevIndex] = $tmp;
                        $swapped = true;
                    }
                    $prevIndex = $i;
                }
                else
                {
                    $prevIndex = $i;
                }
            }
        }
    }
    return $array;
}

function insertPositive($array, $inserting)
{
    $prevIndex = -1;
    for ($i = 0; $i < sizeof($array); $i++)
    {
        if ( $array[$i] > 0)
        {
            if ( $prevIndex != -1 && $prevIndex != $i)
            {
                if ($inserting > $array[$prevIndex] && $inserting <= $array[$i])
                {
                    $array = insertElement($array, $i, $inserting);
                break;
                }
            }
            else 
            {
                $prevIndex = $i;
            }
        }
    }

    return $array;
}

$array = array(2,-1,3,5,-6,1);
$array = sortPositives($array);
$array = insertPositive($array, 4);
print_r($array);