<?php

function dostuff($array, $p) {
    for ($i = sizeof($array) - 1; $i >= 0; $i--) {
        if ( $array[$i] % 2 == 0 && $array[$i] % $p == 0) {
            $array[$i] = $array[sizeof($array) - 1];
            $array[sizeof($array) - 1] = $i;
        }
    }
    print_r($array);
}

dostuff(array(4,8,1,6,2,4,9), 3);
