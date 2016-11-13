<?php
interface Brad451 {
    function m1();
    function m2();
}
interface Brad454 {
    function m3();
    function m4();
}
class Brad452 implements Brad451, Brad454 {
    function m1(){}
    function m2(){}
    function m3(){}
    function m4(){}
}
class Brad453 implements Brad451 {
    function m1(){}
    function m2(){}
}

function m3(Brad451 $obj){
    $obj->m2();
}
function m4(Brad454 $obj){
    $obj->m3();
}
$obj1 = new Brad452; $obj2 = new Brad453;
