<?php
//    $fp = fopen("./brad15.txt", 'r');
//
//    $str = fread($fp, filesize("./brad15.txt"));
//    echo nl2br($str);
//
//    @fclose($fp);

//    $cont = file("./brad15.txt");
//    foreach ($cont as $line){
//        $row = explode(",",$line);
//        foreach ($row as $data){
//            echo $data . '<br />';
//        }
//        echo '<hr />';
//    }

    $fp = fopen("https://tw.stock.yahoo.com/q/q?s=2345", 'r');

    while ( $line = fgets($fp)){
        if (preg_match('/href=\"\/q\/bc\?s=2345/', trim($line))){
            echo "===> " . $line . " <==";
        }
    }


    @fclose($fp);

?>
