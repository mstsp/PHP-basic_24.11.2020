<?php
<?php
//Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение, если данные не переданы то вывести соответствующее сообщение.

$value = 5.555;
function defineDataType($value = NULL)
{
    switch (gettype($value)) {
        case "integer":
            echo "Переданно тип данных: integer";
            break;
        case "boolean":
            echo "Переданно тип данных: boolean";
            break;
        case "float":
            echo "Переданно тип данных: float";
            break;
        case "string":
            echo "Переданно тип данных: string";
            break;
        case "array":
            echo "Переданно тип данных: array";
            break;
        case "object":
            echo "Переданно тип данных: object";
            break;
        case "resource":
            echo "Переданно тип данных: resource";
            break;
        case "NULL":
            echo "Ничего не передано или NULL";
            break;
    }
}

defineDataType($value);
echo "\r\n";

//Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false
$string = 'lsdjfdshcslcjasbdbsnbsadab';
function charCounter($string)
{
    if (gettype($string) === 'string') {
        $counter = substr_count($string, 'b');
        echo "In the string $counter char b" . "\r\n";
        return $counter;
    } else {
        echo 'Not string' . "\r\n";
        return false;
    }
}

charCounter($string);

//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
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

function sumArray($array)
{
    $totalSum = 0;
    array_walk_recursive($array, function ($value, $key) use (&$totalSum) {
        $totalSum += $value;
    }, $totalSum);
    echo "sumArray : $totalSum" . "\r\n";
}

sumArray($array);

//Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float
function square($main, $inner)
{
    $count = intdiv($main, $inner);
    $integer = pow($count, 2);
    $fraction = ($main % $count) / $count;
    if ($fraction === 0) {
        echo "В квадрат размером $main можно вписать квадрат размером $inner - $integer раз(а)";
    } else {
        echo "В квадрат размером $main можно вписать квадрат размером $inner - $integer раз(а) и $count раз(а) по $fraction";
    }
}

square(11, 3);
?>
