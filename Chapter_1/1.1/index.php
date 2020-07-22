<?php

function getNumberOfDigits(string $number) {
    # Неявно преобразуем число в строку чтобы пройтись массивом
    $counter = 0;
    for ($i = 0; $i < strlen($number); $i++){
        if ( (int) $number[$i] < 5){
            $counter++;
        }
    }
    echo "Количество цифр меньше 5 в числе $number: $counter </br>";
}
# Должно быть 6
getNumberOfDigits(81412931);
# Должно быть 3
getNumberOfDigits(992381);

