<?php

$b = 10;
echo $b . '<br />';
test1($b);
echo $b . '<br />';


function test1(&$a){
    $a = 100;
    echo "a = {$a}<br>";
}