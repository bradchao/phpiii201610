<?php
$id1 = new TWId(null);              // new TWId;
$id2 = new TWId(null, true);        // new TWId(true);
$id3 = new TWId(null,null,'A');     // new TWId('A');
$id4 = new TWId(null,true, 'A');    // new TWId(true, 'A');

echo $id1->getId() .'<br>';
echo $id2->getId() .'<br>';
echo $id3->getId() .'<br>';
echo $id4->getId() .'<br>';



class TWId {
    private $id;
    private static $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';

    public function __construct($id=null, $isMale=null, $area=null){
        if (isset($id)){
            // 依照 $id 來建構
            $this->setId($id);
        }else{
            // 自動產生
            $this->autoCreateId($isMale, $area);
        }
    }
    private function autoCreateId($isMale=null, $area=null){
        $tempid = '';
        $tempid .= isset($area)?$area:substr(TWId::$letters, rand(0,25), 1);
        if (isset($isMale)){
            $tempid .= $isMale?'1':'2';
        }else{
            $tempid .= rand(1,2);
        }


        $this->id = $tempid;
    }

    private function setId($id){
        if (TWId::checkTWId($id)){
            $this->id = $id;
        }else{
            throw new Exception();
        }
    }



    function getId(){return $this->id;}

    function getGender(){

    }
    function getArea(){

    }
    // 檢查身分證字號程式
    static function checkTWId($twid){
        $isOK = false;

        if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid)){
            // 開始做驗證碼比對
            $c1 = substr($twid, 0, 1);
            $n12 = strpos(TWId::$letters, $c1) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = substr($twid,1,1);
            $n4 = substr($twid,2,1);
            $n5 = substr($twid,3,1);
            $n6 = substr($twid,4,1);
            $n7 = substr($twid,5,1);
            $n8 = substr($twid,6,1);
            $n9 = substr($twid,7,1);
            $n10 = substr($twid,8,1);
            $n11 = substr($twid,9,1);
            $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 + $n6*5 +
                $n7*4 + $n8*3 + $n9*2 + $n10*1 + $n11*1;
            $isOK = $sum % 10 == 0;
        }
        return $isOK;
    }
}