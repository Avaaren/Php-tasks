<?php 

function getSumOfDigits($number) {
    # Получаем сумму цифр числа
    $sum = 0;
    for ($i = 0; $i < 4; $i++ ) {
        $sum += ($number % 10);
        $number /= 10;
    }
    return $sum;
}

function getDigits($sum) {
    # Через цикл получаем сумму всех 4значных чисел и выводим по заданному условию
    $counter = 0;
    for ($i = 1000; $i < 10000; $i++) {
        if ( getSumOfDigits($i) == $sum ){
            $counter++;
            # Если работаем без массивов, то просто выводим числа
            echo "$i, ";
        }
    }
    if ($counter == 0){
        echo "4 значных чисел с суммой цифр $sum нету <br>";
    }
    else {
        echo "<br> Всего чисел $counter <br>";
    }
}

getDigits(305);
getDigits(22);
getDigits(35);


