<?php 

function findGreatestCommonDivider($firstNum, $secondNum) {
    echo "НОД $firstNum и $secondNum = ";
    while ($firstNum != 0 && $secondNum != 0) {
        if ($firstNum > $secondNum) {
            $firstNum = $firstNum % $secondNum;
        }
        else {
            $secondNum = $secondNum % $firstNum;
        }
    }
    echo $firstNum + $secondNum;
    
}
findGreatestCommonDivider(30, 10);