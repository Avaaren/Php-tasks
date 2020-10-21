<?php 

function isBothSimple($firstNumber, $secondNumber) {
    $max = 0;
    $min = 0;                      
    # Выбираем какое из чисел больше, чтобы сравнивать относительно его                                                         
    if ($firstNumber > $secondNumber) {
        $max = $firstNumber;
        $min = $secondNumber;
    }
    else {
        $max = $secondNumber;
        $min = $firstNumber;
    }
    # Циклом ищем делители большего числа, когда находим, провереям, делится ли второе число на него
    # Если делитель первого также является делителем второго, то возвращаем false
    for ($i = 2; $i < $max; $i++) {
        if ($max % $i == 0) {
            if ($min % $i == 0) {
                echo "$max и $min не взаимно простые <br>";
                return false;
            }
        }
    }
    echo "$max и $min взаимно простые <br>";
}
# Простые
isBothSimple(5,11);
# Не простые
isBothSimple(4,12);
# Простые
isBothSimple(84,275);