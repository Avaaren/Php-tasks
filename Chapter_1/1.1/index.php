<?php

function getNumberOfDigitsBelowFive($number) {
    echo "Число $number <br>";
    $counter = 0;
    while ($number > 1) {
        if ($number % 10 < 5) {
            $counter++;
        }
        $number /= 10;
    }
    echo "Количество цифр меньше 5: $counter </br>";
}


# Должно быть 0
getNumberOfDigitsBelowFive(999);
# Должно быть 4
getNumberOfDigitsBelowFive(192381);
# Должно быть 4
getNumberOfDigitsBelowFive(123456);

