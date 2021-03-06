<?php

function findPositiveIndex($array)
{
    for ($i = 1; $i < sizeof($array); $i++)
    {
        if ($array[$i] > 0)
        {
            return $i;
        }
    }
}

function sortArray($array, $sorted=false)
{
    $swapped = true;
    while($swapped)
    {
        if (!$sorted)
        {
            $swapped = false;
            for ($i = 1; $i < sizeof($array) ; $i++)
            {
                if ( $array[$i - 1] > 0 && $array[$i] == 0 )
                {
                    $tmp = $array[$i - 1];
                    $array[$i - 1] = $array[$i];
                    $array[$i] = $tmp;
                    $swapped = true;
                } 
            }
        }
        else
        {
            $swapped = false;
            for ($i = findPositiveIndex($array) + 1; $i < sizeof($array) ; $i++)
            {
                if ( $array[$i - 1] > $array[$i] )
                {
                    $tmp = $array[$i - 1];
                    $array[$i - 1] = $array[$i];
                    $array[$i] = $tmp;
                    $swapped = true;
                } 
            }
        } 
    }
    
    if (!$sorted)
    {
        return sortArray($array, $sorted=true);
        
    }
    else 
    {
        return $array;
    }
}

$array = array(1, 5, 0, 8, 0, 2);
print_r(sortArray($array, false));
