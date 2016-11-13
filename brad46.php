<?php
trait Brad461 {
    function m1(){echo 'Brad461:m1()<br>';}
}
trait Brad462 {
    function m1(){echo 'Brad462:m1()<br>';}
    function m2(){echo 'Brad462:m2()<br>';}
}
class Brad463 {
    use Brad461;
    use Brad462;
}
//$obj1 = new Brad463;
//$obj1->m1();
//$obj1->m2();