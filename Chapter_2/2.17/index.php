<?php

function findCountOfMultipleElements($array) {
    $count = 0;
    $checkedElements = array();
    // Запуск по элементам цикла
    for ($i = 0; $i < sizeof($array); $i++) {
        $is_checked = false;
        // На каждый элемен ставим метку не проверялся
        // Для каждого элемента запускаем цикл по массиву всех проверенных
        for ($j = 0; $j < sizeof($checkedElements); $j++) {
            // Если текущий элемент массива есть в массиве проверенных, то ставим метку и выходим из цикла
            if ($array[$i] == $checkedElements[$j]) {
                $is_checked = true;
            break;
            }
        }
        // Теперь запускаем еще один цикл с текущего элемента и до конца
        for ($j = $i+1; $j < sizeof($array); $j++) {  
            // Если элемент не проверялся, но дублируется, то увеличиваем счетчик 
            if ( $array[$i] == $array[$j] && !$is_checked) {
                array_push($checkedElements, $array[$i]);
                $count++;
            break;
            }
        }
    }
    print_r($checkedElements);
    echo "$count";
}

// Элемент повторяющийся 2+ раза увеличивает счетчик только на 1
findCountOfMultipleElements(array(2,8,3,1,8,1,2,1));
