<?php 

function findAllNumbers($start, $finish) {

    for ($i = $start; $i < $finish; $i++) {
        $sumOfDividers = 0;
        for ($j = 1; $j < $i; $j++) {
            if ($i % $j == 0) {
                $sumOfDividers += $j;
            }
        }
        if ($i == $sumOfDividers) {
            echo "$i is prefect <br>";
        }
    }
}

findAllNumbers(1, 1000);