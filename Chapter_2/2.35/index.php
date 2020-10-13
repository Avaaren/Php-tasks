<?php

function sortArray($array)
{
    $swapped = true;
    while($swapped)
    {
        $swapped = false;
        for ($i = 1; $i < sizeof($array) ; $i++)
        {
            if (( $array[$i - 1] > $array[$i] && !($array[$i - 1] == 2 && $array[$i] == 1))|| ($array[$i] == 2 && $array[$i - 1] == 1))
            {
                $tmp = $array[$i - 1];
                $array[$i - 1] = $array[$i];
                $array[$i] = $tmp;
                $swapped = true;
            }
        }
    }
    return $array;
}

$array = array(2,0,1,1,0,2);
$array = sortArray($array);
print_r($array);