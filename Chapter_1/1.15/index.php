<?php 

function findNumberOfDeviders($number) {
    $counter = 0;
    for ($i = $number; $i > 0; $i--) {
        if ($number % $i == 0) {
            $counter++;
        }
    }
    echo "Количество делителей числа $number = $counter <br>";
}
# 2
findNumberOfDeviders(13);
# 6
findNumberOfDeviders(63);