<?php

function getLengthOfDigit($number) {
    $length = 0;
    while ($number / 10 > 1) {
        $length++;
        $number /= 10;
    }
    $length +=1;
    return $length;
}

function getNumberOfDigitsBelowFive($number) {
    echo "Число $number <br>";
    # Вычисляем длину числа
    $length = getLengthOfDigit($number);
    $counter = 0;
    # Циклом уменьшаем число в 10 раз и получаем последнюю цифру
    for ($i = 0; $i < $length; $i++) {
        if ($number % 10 < 5){
            $counter++;
        }
        $number = $number / 10;
    }

    echo "Количество цифр меньше 5: $counter </br>";
}
# Должно быть 0
getNumberOfDigitsBelowFive(999);
# Должно быть 4
getNumberOfDigitsBelowFive(192381);
# Должно быть 4
getNumberOfDigitsBelowFive(123456);

