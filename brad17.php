<?php
    $a = array();
    $a[0] = array();
    $a[1] = 22;

    $a[0][7] = 333;
    $a[0][2] = 123;

    $a[7][7] = 777;
    $a[7][] = 7777;
    $a[][] = 999;

    var_dump($a);

    /*
    $a[0][3] = 100;
    */

?>