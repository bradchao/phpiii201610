<?php
class Brad51{
    public $a;
    public $b;
    function __construct($a, $b){$this->a = $a; $this->b=$b; }
    function m1(){echo 'm1()';}
}
$obj1 = new Brad51(11,22);
$obj2 = new Brad51(33,44);
foreach ($obj1 as $k => $v){
    echo "{$k} => {$v}<br>";
}

