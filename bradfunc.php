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
        echo "{$n1}:{$n2}";

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