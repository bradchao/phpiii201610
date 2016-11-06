<?php
    require_once 'bradapi.php';
    session_start();

    $myCart = new Cart;
    $_SESSION['cart'] = $myCart;

    $myCart->addItem('P0002', 12);
    $myCart->addItem('P0012', 32);
    $myCart->addItem('P0001', 4);
    $myCart->addItem('P0012', 22);

    $list = $myCart->getBuyList();
    foreach ($list as $k => $v){
        echo "{$k} : {$v}<br>";
    }

?>
<a href="brad31.php">Next Page</a>










