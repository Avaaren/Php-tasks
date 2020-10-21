<?php 

function refactorNumberToMax($number) {
    $sequance = 0;
    for ($i = 9; $i >= 0; $i--) {
        $tmp = $number;
        while ($tmp >= 1) {
            if ($tmp % 10 == $i){
                $sequance = ($sequance * 10) + ($tmp % 10);
            }
            $tmp /= 10;
        }
    }
    return $sequance;
}

function refactorSequance($start, $finish) {
    for ($i = $start; $i < $finish; $i++) {
        echo refactorNumberToMax($i) . ", ";
    }
}

refactorSequance(38, 195);
