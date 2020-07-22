<?php 

function isContainDuplicates($number) {
    while ($number > 1) {
        # Берем последнее число и циклом сравниваем его с следующими числами
        $lastDigit = $number % 10;
        # Для этого сравнения отсекаем текущее число 
        $innerNumber = $number / 10;
        while ($innerNumber > 1) {
            # И сравниваем текущее число и на разряд выше
            if ($lastDigit == ($innerNumber % 10)){
                return true;
            }
            $innerNumber /= 10;
        }
        $number /= 10;
    }
    return false;
}

for ($i = 1000; $i < 10000; $i++) {
    if ( !isContainDuplicates($i) ) {
        echo "$i, ";
    }
}