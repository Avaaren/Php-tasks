<?php

function findMinPositiveAndMaxNegative($array) {
    $maxOfNegative = 0;
    $minOfPositive = 0;
    # Устанавливаем изначальные значения
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] > 0 && $minOfPositive == 0) {
            $minOfPositive = $array[$i];
        }
        if ($array[$i] < 0 && $maxOfNegative == 0) {
            $maxOfNegative= $array[$i];
        }
    }
    # Только после их установки ищем максимальный и минимальный эл-т
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] > 0 && $minOfPositive > $array[$i]) {
            $minOfPositive = $array[$i];
        }
        if ($array[$i] < 0 && $maxOfNegative < $array[$i]) {
            $maxOfNegative= $array[$i];
        }
    }
    echo "$maxOfNegative and $minOfPositive";
}
# -1 и 2
findMinPositiveAndMaxNegative(array(-3,-8, 2,5, -1, 4));