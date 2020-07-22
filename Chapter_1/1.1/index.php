<?php

function getNumberOfDigits($number) {
    echo "Число $number <br>";
    # Вычисляем длину числа
    $length = ceil(log10(abs($number) + 1));
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
getNumberOfDigits(999);
# Должно быть 4
getNumberOfDigits(192381);
# Должно быть 4
getNumberOfDigits(123456);

