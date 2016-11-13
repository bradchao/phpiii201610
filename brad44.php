<?php
class Brad441 {
    function m1(){echo 'Brad441:m1()<br>';}
}
abstract class Brad442 {
    function m1(){echo 'Brad442:m1()<br>';}
    abstract function m2();
}
class Brad443 extends Brad442 {
    function m2(){echo 'Brad443:m2()<br>';}
}
class Brad444 extends Brad442 {
    function m2(){echo 'Brad444:m2()<br>';}
}
function go(Brad442 $car){
    $car->m2();
}
$obj1 = new Brad441;
$obj2 = new Brad443;
$obj3 = new Brad444;

// go($obj1);
go($obj2);
go($obj3);









