<?php

echo Bike::getCount();
$myBike = new Bike;
$urBike = new Bike;
echo $myBike->a . '<br>';
echo Bike::getCount();



class Bike {
    private $speed;
    public $color;

    private static $count = 0;
    public $a = 0;

    // 建構式(子/方法): Constructor
    public function __construct($color = 1){
        $this->speed = 0;
        $this->color = $color;

        $this->a++;
        Bike::$count++;
    }

    public static function getCount(){
        return Bike::$count;
    }

    public function upSpeed($gear = 1){
        if ($gear >=1 && $gear <= 24){
            $this->speed = $this->speed<1?1:$this->speed * ($gear + 0.2);
        }else{
            throw new Exception();
        }
    }
    public function downSpeed(){
        $this->speed = $this->speed<1?0:$this->speed * 0.7;
    }
    public function getSpeed(){
        return $this->speed;
    }
}
?>