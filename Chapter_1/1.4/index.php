<?php 

function isSequance($number) {
    # Сравниваем два последних числа. Если последнее больше предпоследнего
    # То это либо возрастающая последовательность либо никакая. И наоборот.
    if ( ($number / 10 % 10) > ($number % 10) ) {
        // Decreasing
        while ( $number / 10 >= 1 ) {
            if (!( ($number / 10 % 10) > ($number % 10) )) {
                return false;
            }
            $number /= 10;
        }
    }  
    if ( ($number / 10 % 10) < ($number % 10) ) {
        // Increasing
        while ( $number / 10 >= 1 ) {
            if (!( ($number / 10 % 10) < ($number % 10) )) {
                return false;
            }
        $number /= 10;
        }
    }
    # Если два соседних числа равны то число не последовательность
    if ( ($number / 10 % 10) == ($number % 10) ) {
        return false;
    }
    # Если число все таки последовательность то возвращаем true
    return true; 
}

for ($i = 1000; $i < 10000; $i++) {
    if ($i % 2 == 0) {
        if (isSequance($i)){
            echo "$i, ";
        }
    }
}

