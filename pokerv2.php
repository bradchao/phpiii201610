<?php
    // 洗牌
    $n = 52;
    for($i = 0; $i < $n; $i++){
        do{
            $v = rand(0,$n-1);
            // 檢查機制
            $isRepeat = false;
            for ($j=0; $j<$i; $j++){
                if ($v == $poker[$j]){
                    // 此時發生重複了
                    $isRepeat = true;
                    break;
                }
            }
        }while ($isRepeat);
        $poker[] = $v;
    }

    foreach ($poker as $v){
        echo "{$v}<br />";
    }

    // 發牌

    // 攤牌(理牌)
//
?>