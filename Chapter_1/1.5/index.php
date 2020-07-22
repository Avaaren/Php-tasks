<?php 

function reverseDigit($number) {
    echo "$number -> ";
    $reversedDigit = 0;
    while ($number >= 1) {
        # Получаем последнее число и циклом увеличиваем его разрядность добавляя след идущие
        $lastDigit = $number % 10;
        $number /= 10;
        # 423 = 0*10+3 -> 3*10+2 -> 32*10+4
        $reversedDigit *= 10;
        $reversedDigit += $lastDigit;
    }
    echo "$reversedDigit <br>";
}

reverseDigit(435839);
reverseDigit(123456789);