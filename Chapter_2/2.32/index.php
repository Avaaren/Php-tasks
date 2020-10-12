<?php
// четные - возраст, нечентные убыль

function sortArray($array)
{
    $swapped = true;
    while ($swapped)
    {
        // Сортировка пузырьком
        $swapped = false;
        $prevIndexEven = -1;
        $prevIndexOdd = -1;
        for ($i = 0; $i < sizeof($array); $i++)
        {
            // Если число в итерации четное
            if ($array[$i] % 2 == 0)
            {
                // И если до него уже было четное число
                if ( ($prevIndexEven != $i && $prevIndexEven != -1) )
                {
                    // Если они стоят не в нужном порядке - меняем местами
                    if ( $array[$prevIndexEven] > $array[$i])
                    {
                        $tmp = $array[$i];
                        $array[$i] = $array[$prevIndexEven];
                        $array[$prevIndexEven] = $tmp;
                        // Помечаем что цикл еще не закончен
                        $swapped = true;
                    }
                    $prevIndexEven = $i;
                }
                // Если четное число - первое четное в массиве - задаем его позицию в индекс
                else
                {
                    $prevIndexEven = $i;
                }
                
            }
            // Если число нечетное
            else
            {
                // И если до него уже было нечетное число
                if ( ($prevIndexOdd != $i && $prevIndexOdd != -1) )
                {
                    // Если они стоят не в нужном порядке - меняем местами
                    if ( $array[$prevIndexOdd] < $array[$i])
                    {
                        $tmp = $array[$i];
                        $array[$i] = $array[$prevIndexOdd];
                        $array[$prevIndexOdd] = $tmp;    
                        // Помечаем что цикл еще не закончен
                        $swapped = true;
                    }
                    $prevIndexOdd = $i;
                    
                }
                // Если нечетное число - первое четное в массиве - задаем его позицию в индекс
                else
                {
                    $prevIndexOdd = $i;
                }
            }
        }
    }
    print_r($array);
}

$array = array(3,6,2,1,9,4,8,5);
sortArray($array);