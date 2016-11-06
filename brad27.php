<?php
    require_once 'bradapi.php';
    session_start();


    $a = rand(1,49);
    $array = [1,2,3,4];

    $myA = new MyA($a, $array);
    $_SESSION['a'] = $myA;

    echo $myA->a . '<hr>';
    foreach ($myA->array as $v){
        echo "{$v}<br>";
    }


    $myA->a = 100;
    $myA->array = [4,3,2,1];

?>
<hr />
<a href="brad28.php">Brad28</a>
