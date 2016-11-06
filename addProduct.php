<?php
    session_start();
    if (!isset($_SESSION['account'])){
        header("Location: login.php");
    }else{
        $account = $_SESSION['account'];
    }

    include "sql.php";
    if (isset($_GET['itemno'])){
        $itemno = $_GET['itemno']; $itemname = $_GET['itemname'];
        $price = $_GET['price']; $qty = $_GET['qty'];
        $sql = "INSERT INTO product (itemno,itemname,price,qty)" .
                " VALUES ('{$itemno}','{$itemname}',{$price},{$qty})";
        $mysqli->query($sql);
        header("Location: bmain.php");
    }

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form>
Item No.<input name="itemno" /><br />
Item Name<input name="itemname" /><br />
Price<input name="price" /><br />
Qty.<input name="qty" /><br />
<input type="submit" value="Add" />
</form>
