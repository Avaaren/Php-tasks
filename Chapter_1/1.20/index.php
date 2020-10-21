<?php 



function findDigitWithMaxSumOfDividers($start, $stop) {
    $maxSumOfDividers = 0;
    $digitWithMaxSum = 0;
    for ($i = $start; $i < $stop; $i++) {
        $sumOfDividers = 0;
        for ($j = 1; $j < $i; $j++) {
            if ($i % $j == 0) {
                $sumOfDividers += $j;
            }
        }
        if ($sumOfDividers > $maxSumOfDividers) {
            $maxSumOfDividers = $sumOfDividers;
            $digitWithMaxSum = $i;
        }
    }
    echo "Наибольшую сумму делителей имеет $i ($maxSumOfDividers)";
}

findDigitWithMaxSumOfDividers(1,1000);