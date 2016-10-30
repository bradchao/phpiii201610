<?php

// 檢查身分證字號程式
function checkTWId($twid){
    $isOK = false;
    $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
    if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid)){
        // 開始做驗證碼比對
        $c1 = substr($twid, 0, 1);
        $n12 = strpos($letters, $c1) + 10;
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


function sayYa($name = 'nobody'){
    echo "Ya, {$name}";
}
// f(x, y) = 2X + Y
function fx($x = 0, $y = 1){
    return 2 * $x + $y;
}

function sayYa2(){
    $names = func_get_args();
    foreach ($names as $v){
        echo "Ya!, {$v}<br />";
    }
}

?>