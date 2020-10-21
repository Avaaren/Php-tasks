<?php 

function numberToBin($number) {
    $binNumber = 0;
    $pow = 1;
    while ($number >= 1) {
        $mod = $number % 2;
        $binNumber = $mod * $pow + $binNumber;
        $number /= 2;
        $pow *= 10;
    }
    echo $binNumber;
}

function numberToHex($number){
    $lastDigit = ($number % 16);
    $digits = "0123456789ABCDEF";
    $rest = $number / 16;
    if ($rest < 1) {
        return $digits[$lastDigit];
    }
    return numberToHex($rest) . $digits[$lastDigit];
}

function printNumber($number) {
    echo "Исходное число: $number <br>";
    echo "В 2 системе: ";
    numberToBin(753);
    $hexNumber = numberToHex(753);
    echo "<br> В 16 системе: $hexNumber <br>";

}

printNumber(7123);
