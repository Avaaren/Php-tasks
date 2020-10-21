<?php

function isSequance($array, $k, $x) {
    $sequanceLength = 0;

    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $array[$i] == $x) {
            $sequanceLength++;
        }
        elseif ($sequanceLength == $k) {
            echo "There is! <br>";
            return true;
        }
        else { 
            $sequanceLength = 0;
        }
    }
    echo "There is no sequance";
}
# Yes
isSequance(array(4,8,1,1,1,4), 3, 1);
# No
isSequance(array(4,8,1,2,1,4), 3, 1);