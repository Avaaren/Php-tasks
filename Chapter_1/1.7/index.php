<?php 

function isContainDuplicates($number) {
    echo "$number : <br>";
    while ($number > 1) {
        # Берем последнее число и циклом сравниваем его с следующими числами
        $lastDigit = $number % 10;
        # Для этого сравнения берем число на разряд выше сравниваемого
        $innerNumber = $number / 10;
        while ($innerNumber > 1) {
            if ($lastDigit == ($innerNumber % 10)){
                echo "$lastDigit дублируется <br>";
                return true;
            }
            $innerNumber /= 10;
        }
        $number /= 10;
    }
    echo "Не содержит дупликатов <br>";
}

isContainDuplicates(12345678);
isContainDuplicates(192345689);