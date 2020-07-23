<?php 

function findFriendlyNumbers($start, $finish) {
    for ($i = $start; $i < $finish; $i++) {
        for ($j = 1; $j < $i; $j++) {
            if ( ($i == sumOfDeviders($j)) && ($j == sumOfDeviders($i)) ) {
                echo "Число $i и число $j дружественны <br>";
            }
        }
    }
}
function sumOfDeviders($number) {
    $sumOfDividers = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sumOfDividers += $i;
        }
    }
    return $sumOfDividers;
}

findFriendlyNumbers(1,1500);