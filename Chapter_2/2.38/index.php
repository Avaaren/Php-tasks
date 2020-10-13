<?php

function preSortArray($array)
{
    $swapped = true;
    while($swapped)
    {
        $swapped = false;

        for ($i = 1; $i < sizeof($array); $i++)
        {
            if ($array[$i] < 0 && $array[$i - 1] > 0)
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

function sortArray($array)
{
    $swapped = true;
    while ($swapped)
    {
        $swapped = false;
        $prevIndexNegative = -1;
        $prevIndexPositive = -1;
        for ($i = 0; $i < sizeof($array); $i++)
        {
            // Сортировка положительных чисел
            if ($array[$i] > 0)
            {
                if ( ($prevIndexPositive != $i && $prevIndexPositive != -1) )
                {
                    if ( $array[$prevIndexPositive] < $array[$i])
                    {
                        $tmp = $array[$i];
                        $array[$i] = $array[$prevIndexPositive];
                        $array[$prevIndexPositive] = $tmp;
                        $swapped = true;
                    }
                    $prevIndexPositive = $i;
                }
                else
                {
                    $prevIndexPositive = $i;
                }
                
            }
            // Сортировка отрицательных чисел
            else
            {
                if ( ($prevIndexNegative != $i && $prevIndexNegative != -1) )
                {
                    if ( $array[$prevIndexNegative] > $array[$i])
                    {
                        $tmp = $array[$i];
                        $array[$i] = $array[$prevIndexNegative];
                        $array[$prevIndexNegative] = $tmp;    
                        $swapped = true;
                    }
                    $prevIndexNegative = $i;
                    
                }
                else
                {
                    $prevIndexNegative = $i;
                }
            }
        }
    }
    return $array;
}

$array = array(3,6,-2,1,-9,4,-8,5);
$array = preSortArray($array);
print_r(sortArray($array));