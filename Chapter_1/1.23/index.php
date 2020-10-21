<?php 

function refactorNumber($number) {
    $sequance = 0;
    for ($i = 0; $i < 9; $i++) {
        $tmp = $number;
        while ($tmp >= 1) {
            if ($tmp % 10 == $i){
                $sequance = ($sequance * 10) + ($tmp % 10);
            }
            $tmp /= 10;
        }
    }
    echo "$number -- $sequance";
}

refactorNumber(23874923);
