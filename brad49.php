<?php
require 'brad47.php';
require 'brad48.php';

// import
use tw\brad\utils\Brad1;
use tw\brad\tools\Brad1 as Brad2;
use function tw\brad\tools\sayYa;

$obj1 = new Brad1;
$obj1->m1();

$obj3 = new Brad1;
$obj3->m1();

$obj2 = new Brad2;
$obj2->m1();

sayYa();
tw\brad\utils\sayYa();

class Brad49 extends Brad2 {

}


