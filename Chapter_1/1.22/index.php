<?php 

function factorNumber($number) {
    $i = 2;
    while ($i < $number) {
        if ($number % $i == 0) {
            echo "$i ";
            $number /= $i;
        }
        else {
            $i++;
        }
    }
    if ($number > 1) {
        echo "$number <br>";
    }
}

# 2 2 3
factorNumber(12);
# 2 2 3 3 3 
factorNumber(108);