<?php
    $obj1 = new Brad331;
    $obj2 = new Brad332;

    if ($obj2 instanceof Brad331){
        echo 'OK';
    }else{
        echo 'XX';
    }



class Brad331{
    function test1(){
        echo 'Brad331:test1()<br>';
    }
}
class Brad332 extends Brad331 {
    function test1($a = 1){
        //parent::test1();
        echo 'Brad332:test1()<br>';
    }
    function test2(){
        echo 'Brad332:test2()<br>';
    }
    function test3(){
        $this->test1();
        self::test1();
        parent::test1();
    }
}

?>