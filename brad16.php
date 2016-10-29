<?php
    $a = [4 => 1, 2, 3, 4, 56, 777, 7 => 89,100];

    $b['name'] = 'Brad';
    $b[] = 123;
    $b['weight'] = 80;

    foreach ($a as $k => $v){
        echo "{$k} : {$v}<br />";
    }


?>