<?php
    $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

    echo 'Посчитать длину массива. ' . 'Ответ: ' . count($arr) . "\r\n";

    echo 'Переместить первые 4 элемента массива в конец массива. ';
    $elements = array_splice($arr, 0, 4);
    array_push($arr, ...$elements);
    echo 'Ответ: ' . var_export($arr) . "\r\n";

    echo 'Получить сумму 4,5,6 элемента. ';
    $elements1 = array_slice($arr, 3, 3);
    echo 'Ответ: ' . array_sum($elements1) . "\r\n";

    $firstArr = [
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'four' => 5,
        'five' => 12,
    ];
    $secondArr = [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
        'four' => 5,
        'five' => 13,
        'six' => 37,
    ];

    echo 'Найти все элементы которые отсутствуют в первом массиве и присутствуют во втором. ' . 'Ответ: ' .  var_export(array_diff($secondArr, $firstArr)) . "\r\n";
    echo 'Найти все элементы которые присутствую в первом и отсутствуют во втором. ' . 'Ответ: ' . var_export(array_diff($firstArr, $secondArr)) . "\r\n";
    echo 'Найти все элементы значения которых совпадают. ' . 'Ответ: ' . var_export(array_intersect($firstArr, $secondArr)) . "\r\n";

    echo 'Найти все элементы значения которых отличается. ';
    $diff1 = array_diff($secondArr, $firstArr);
    $diff2 = array_diff($firstArr, $secondArr);
    $diff = $diff1 + $diff2;
    echo 'Ответ: '. var_export($diff) . "\r\n";

    $array = [
        'one' => 1,
        'two' => [
            'one' => 1,
            'seven' => 22,
            'three' => 32,
        ],

        'three' => [
            'one' => 1,
            'two' => 2,
        ],

        'four' => 5,
        'five' => [
            'three' => 32,
            'four' => 5,
            'five' => 12,
        ],
    ];

    echo 'Получить все вторые элементы вложенных массивов' . 'Ответ: ' ;
    $elementsArray = [];
    foreach ($array as $key => $value) {
        if (is_array($array[$key]) and array_key_exists('two', $array[$key])) {
            echo $value['two'] . "\r\n";
        }
    };

    echo 'Получить общее количество элементов в массиве. ' . 'Ответ: ' . count($array, COUNT_RECURSIVE ) . "\r\n";

    echo 'Получить сумму всех значений в массиве. ';
    $totalSum = 0;
    foreach ($array as $key => $value) {
        if (is_array($array[$key])) {
           $totalSum += array_sum($array[$key]);
        } else {
            $totalSum += $value;
        }
    };
    echo  'Ответ: ' . $totalSum;
?>