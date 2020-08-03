<?php


function splitToPosAndNeg($array) {
    $positiveArray = array();
    $negativeArray = array();

    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $array[$i] >= 0 ) {
            array_push($positiveArray, $array[$i]);
        }
        else {
            array_push($negativeArray, $array[$i]);
        }
    }
    unset($array);
    echo "Положительный и отрицательный <br>";
    print_r($positiveArray);
    print_r($negativeArray);
}

function splitToOddAndEven($array) {
    $oddArray = array();
    $evenArray = array();

    for ($i = 0; $i < sizeof($array); $i++) {
        if ( $array[$i] % 2 == 0 ) {
            array_push($evenArray, $array[$i]);
        }
        else {
            array_push($oddArray, $array[$i]);
        }
    }
    unset($array);
    echo "<br>Четный и нечетный <br>";
    print_r($evenArray);
    print_r($oddArray);
}
# Можно в одно объеденить, но все таки подзадачи две, поэтому и функции две
splitToPosAndNeg(array(12,5,-3,7,-2,-5,8));
splitToOddAndEven(array(3,4,1,8,6,7));