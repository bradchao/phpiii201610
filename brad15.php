<?php
    $p = [1 => 0,0,0,0,0,0]; // $p[1] = 0, $p[2] = 0.... $p[6] = 0;

    for ($i=0; $i<100000; $i++){
        $point = rand(1,9);
        $p[$point>6?$point-3:$point]++;
    }

    for ($i = 1; $i<= count($p); $i++){
        echo "{$i}點出現{$p[$i]}次<br />" ;
    }

?>