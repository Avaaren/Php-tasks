<?php

function createTable()
{
    $table = array();
    for ($i = 1; $i < 21; $i++)
    {
        $table[$i] = array();
    }
    print_r($table);
    return $table;
}

$table = createTable();
$array = array(1, 5, 10, 8, 4, 2);