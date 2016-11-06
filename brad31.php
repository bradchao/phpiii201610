<?php
    require_once 'bradapi.php';
    session_start();

    if (!isset($_SESSION['cart'])) header("Location: brad30.php");

    $myCart = $_SESSION['cart'];
    $myCart->addItem('P0077', 77);
    $myCart->removeItem('P0012');
    $myCart->editItem('P0001', 111);

    $list = $myCart->getBuyList();
    foreach ($list as $k => $v){
        echo "{$k} : {$v}<br>";
    }

?>