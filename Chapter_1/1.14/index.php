<?php 

function findPairSimpleNumbers() {
    $counter = 0;
    # Через цикл пройдем по ряду чисел
    for ($i = 2; $i < 10000; $i++) {
        # И будем проверять простое ли число
        if (isSimple($i)) {
            # Если оно простое найдем все простые числа меньше его
            for ($j = 0; $j < $i; $j++) {
                # И проверим ихх разность
                if ( isSimple($j) && ($i - $j == 2) ){
                    echo "$i - $j = 2 and they are pair simple <br>";
                    $counter++;
                    if ($counter >= 10 ) {
                        exit();
                    }
                }
            }
        }
    }
}

function isSimple($number) {
    $is_simple = true;
    for ($i = 2; $i < $number; $i++) {
        if ( ($number % $i) == 0) {
            $is_simple = false;
        }
    }
    return $is_simple;
}


findPairSimpleNumbers();