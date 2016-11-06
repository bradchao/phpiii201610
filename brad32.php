<?php
$obj1 = new Brad321;
echo $obj1->a . '<br>';
echo $obj1->getB() . '<br>';
echo $obj1->getC() . '<hr>';

$obj2 = new Brad322;
echo $obj2->a . '<br>';
echo $obj2->getB() . '<br>';
echo $obj2->getBV2() . '<br>';
//echo $obj2->c;
echo $obj2->getCV2() . '<hr>';


class Brad321 {
    public $a = 1;      // 全世界
    private $b = 2;     // 自己
    protected $c = 3;   // 自己本身及繼承的子類別可以存取

    function getB(){return $this->b;}
    function getC(){return $this->c;}
}
class Brad322 extends Brad321 {
    function getBV2(){
        return parent::getB();
        //return $this->b;
    }
    function getCV2(){
        return $this->c;
    }
}
















