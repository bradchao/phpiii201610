<?php
    include_once 'header.html';
    require_once 'bradfunc.php';

    sayYa();
    echo '<hr />';
    $r = fx(3);
    echo $r;
    echo '<hr />';
    sayYa2('Brad','Tony','Peter');
    echo '<hr />';
    $a = 123;
    echo $a;
    test1();
    echo '<hr />';
    echo $a;

    function test1(){
        global $a;
        $a = 321;
    }


    include_once 'footer.html';
?>