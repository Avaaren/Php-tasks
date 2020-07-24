<?php 


function checkSequance($start, $finish, $sum) {
    echo "Собрать сумму $sum из цифр возможно для  ";
    for ($i = $start; $i < $finish; $i++) {
        if ( isPossibleToGetSum($i, $sum) ) {
            echo "$i ,";
        }
    }
}

function isPossibleToGetSum($number, $sum) 
{   
    if ($sum == 0) {
        return true;
    }
    if ($number < 1) {
        return false;    
    } 
    $result=isPossibleToGetSum(($number / 10), $sum);
    if ($result == true) {
        
        return $result;
    }
    $result = isPossibleToGetSum(($number / 10), $sum - ($number % 10));

    return $result;
}

checkSequance(1121,1187, 6);
