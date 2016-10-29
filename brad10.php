<?php

    /*
    for (首次執行敘述句; 執行前的判斷(true) ; 執行後的敘述句){

    }
    */

    $i = 0;
    for (sayYa() ; ; echoLine()){
        if ($i>=10) break;

        echo "{$i}<br />";
        $i++;
    }

    function sayYa(){
        echo 'Ya!<br />';
    }

    function echoLine(){
        echo '<hr />';
    }


?>