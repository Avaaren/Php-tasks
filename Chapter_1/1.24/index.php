<?php 

function numberToBin($number) {
    $binNumber = 0;
    $pow = 1;
    while ($number >= 1) {
        $mod = $number % 2;
        $binNumber = $mod * $pow + $binNumber;
        $number /= 2;
        $pow *= 10;
    }
    echo $binNumber;
}


function numberToHex($number) {
    $num = 0;
    $raz = 1;
    $pos = 0;
    $posToReplace = 0;
    while ($number >= 1) {
        $pos++;
        $prev = $raz;
        $mod = $number % 16;
        $num = $mod * $raz + $num;
        if ($mod >= 10) {
            ($pos == 1) ? ($posToReplace = $pos * 1 + $posToReplace) : ($posToReplace = $pos * 10 + $posToReplace);
            $raz *= 100;
        }
        
        else {
            $raz *= 10;
        }

        $number /= 16;
    }
    echo "$num --$posToReplace";
}

numberToHex(9234);
