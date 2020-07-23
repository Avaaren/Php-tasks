<?php 

function findLowestCommonMultiple($firstNum, $secondNum) {
    echo "НОК $firstNum и $secondNum = ";
    $numMultiple = $firstNum * $secondNum;
    while ($firstNum != 0 && $secondNum != 0) {
        if ($firstNum > $secondNum) {
            $firstNum = $firstNum % $secondNum;
        }
        else {
            $secondNum = $secondNum % $firstNum;
        }
    }
    $lowestCommonMultiple = $numMultiple / ($firstNum + $secondNum);
    echo "$lowestCommonMultiple <br>";
    
}
findLowestCommonMultiple(34, 152);