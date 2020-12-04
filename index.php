<?php
// $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
// for($i = 0; $i < count($arr); $i++) {
//    echo $arr[$i];
// }

    $array = [
    'red' => 1,
    'blue' => 2,
    'green' => 3
    ];

    foreach($array as $key => $value) {
    echo 'key: '. $key . ';'  . 'value:'. $value . "\r\n";
    }

    $array2 = $array;

    $array['red'] = 3333;

    var_export($array);
    var_export($array2);


    $arr1 = [1, 2, 3, 4, 5];
    $arr2 = $arr1;

    $arr2[3] = 545454;
    var_export($arr1);
    var_export($arr2);
//
//    $end = false;
//    $current = 1;
//    while(!$end) {
//        if(empty($current)) {
//            $end = true;
//        } else {
//            $current = array_pop($array);
//            var_export($current);
//        }
//    }

    var_export(array_merge($array, $arr1));
?>