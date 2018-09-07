<?php

$lesson_num =  15;


// foreach (range(1,$lesson_num)  as $num) {
//     echo "http://localhost:3000/en/challenges/php-lesson".str_pad($num, 2, "0", STR_PAD_LEFT)."/php".$num."1".PHP_EOL;
// }
// die();

foreach(range(1,$lesson_num) as $num){
    $lecture = 1;
    /**
     * 写経
     */
    $syakyou_file = 'syakyou_data/php_'.$num.'.php';
    if(file_exists($syakyou_file)){
        $data = include($syakyou_file);
        foreach(range(1,count($data)) as $s_num){
            echo "http://localhost:3000/en/challenges/php-lesson".str_pad($num, 2, "0", STR_PAD_LEFT)."/php".$num.(2+$s_num).PHP_EOL;
        }
    }
}
