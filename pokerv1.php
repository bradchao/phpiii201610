<?php
    // 洗牌
    for($i = 0; $i < 6; $i++){
        $v = rand(0,5);
        // 檢查機制
        $isRepeat = false;
        for ($j=0; $j<$i; $j++){
            if ($v == $poker[$j]){
                // 此時發生重複了
                $isRepeat = true;
                break;
            }
        }
        if (!$isRepeat){
            $poker[] = $v;
        }else{
            $i--;
        }
    }

    foreach ($poker as $v){
        echo "{$v}<br />";
    }

    // 發牌

    // 攤牌(理牌)
//
?>