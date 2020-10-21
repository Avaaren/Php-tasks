<?php

function findMultipleElements($array) {
    $checkedElements = array();
    $uniqueMultipleElements = array();
    // Проходим по массиву, каждый элемент метим как не проверенный
    for ($i = 0; $i < sizeof($array); $i++) {
        $is_checked = false;
        // Сравниваем текущий элемент с уже проверенными
        for ($j = 0; $j < sizeof($checkedElements); $j++) {
            // Если такой элемент уже проверялся, то он нам подходит
            if ($array[$i] == $checkedElements[$j])
            {
                $count = 0;
                // Если элемент дубликат но еще не был выбран, то выбираем его
                // Если был выбран, то пропускаем повторное добавление
                for ($k = 0; $k < sizeof($uniqueMultipleElements); $k++) {
                    if ($array[$i] == $uniqueMultipleElements[$k])
                    {   
                        $count++;
                    }
                }
                if ($count > 0)
                {   
                    continue;
                }
                array_push($uniqueMultipleElements, $array[$i]);
            }
        }
        array_push($checkedElements, $array[$i]);
    }
    print_r($uniqueMultipleElements);
}
findMultipleElements(array(3, 6, 2, 3, 8, 2, 6, 1));
