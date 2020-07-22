<?php

function isSimple($number) {
    $is_simple = true;
    # 0 и 1 изначально простые
    for ($i = 2; $i < $number; $i++) {
        if ( ($number % $i) == 0) {
            $is_simple = false;
        }
    }
    if ($is_simple) {
        echo "$number - простое <br>";
    }
    else {
        echo "$number - не простое <br>"; 
    }
}

isSimple(7);
isSimple(3842);
isSimple(39248023);