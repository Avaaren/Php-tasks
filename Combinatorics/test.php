<?php 

function find($str) {
    for ($i = 0; $i < strlen($str); $i++) {
        for ($j = 0; $j < strlen($str); $j++) {
            if ( $j != $i ) {
                echo "$str[$i]". $str[$j] . "<br>";
            }
        }
    }
}

function fact($number) {
    if ($number == 0) {
        return 1;
    }
    return fact($number - 1) * $number;
}


function swap(&$array, $i, $j) {
    $tmp = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $tmp;
}

function printComb($array, $combinationLength) {
    for ($i = 0; $i < $combinationLength; $i++){
        echo $array[$i];
    }
    echo "<br>";
}

function comb(&$array, $arrayLength, $combinationLength, &$counter, &$swappedIndexes) {
    # Счетчик для подсчета размещений
    $counter++;
    do {
        # Берем предпоследний элемент
        $j = $arrayLength - 2;
        # Идем от конца до начала беря в рассчет то, что конечная последовательность чисел 
        # равна отсортированной в порядке убывания (для 1 2 3 -> 3 2 1)
        // 1 1 1 1
        while ( ($j != -1) && ($array[$j] >= $array[$j + 1]) ) {
            if ( $array[$j] == $array[$j + 1] && (!in_array($j, $swappedIndexes)) ) {
                break;
            }
            $j--;
        }
        # Если дошли до конца и условие не нарушилось то перестановок нету
        if ( $j == -1 ) {
            return false;
        }
        # Когда вышли из цикла, то у нас j имеет индекс нарушенной последовательности
        $lastElement = $arrayLength - 1;
        # Ищем первое число с конца которое больше текущего
        while( $array[$j] >= $array[$lastElement] ) {
            if ($array[$j] == $array[$lastElement] ) {
                break;
            }
            $lastElement--;
		}

        if ( ($array[$j] == $array[$j + 1]) && (!in_array($j, $swappedIndexes)) ) {
            swap($array, $j, $lastElement);
            # После чего сортируем все что справа по возрастанию
            $l = $j + 1;
            $r = $arrayLength - 1;
        
            while ($l <= $r) {
                swap($array, $l++, $r--);
            }
            
			array_push($swappedIndexes, $j);
        continue;
        }
        # И меняем местами
        swap($array, $j, $lastElement);
        # После чего сортируем все что справа по возрастанию
        $l = $j + 1;
        $r = $arrayLength - 1;
    
        while ($l <= $r) {
            swap($array, $l++, $r--);
		}
		echo "indexes = $j, and array = ";
		print_r($swappedIndexes);
    }
    while ($j > $combinationLength - 1);
    return true;

}
$swappedIndexes = array();
$arr = array(1,2,2);
$arrayLength = sizeof($arr);
$combinationLength = 2;
$counter = 0;
printComb($arr, $combinationLength);
while ( comb($arr, $arrayLength, $combinationLength, $counter, $swappedIndexes) ) {
	printComb($arr, $combinationLength);
}
echo "count = $counter";
// Сейчас проблема в том что равные символы не переставляются нужно исправлять