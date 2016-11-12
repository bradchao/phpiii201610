<?php
    session_start();
    if (!isset($_SESSION['account'])){
        header("Location: login.php");
    }else{
        $account = $_SESSION['account'];
    }

    include "sql.php";
    if (isset($_REQUEST['itemno'])){
        // 資料新增處理
        $itemno = $_REQUEST['itemno']; $itemname = $_REQUEST['itemname'];
        $price = $_REQUEST['price']; $qty = $_REQUEST['qty'];
        $sql = "INSERT INTO product (itemno,itemname,price,qty)" .
                " VALUES ('{$itemno}','{$itemname}',{$price},{$qty})";
        $mysqli->query($sql);
        $filename = "p_{$mysqli->insert_id}.jpeg";

        //echo $filename;

        // 處理上傳的檔案
        $upload = $_FILES['image'];
        if ($upload['error']==0){
            copy($upload['tmp_name'], "pimgs/{$filename}");
        }

        header("Location: bmain.php");
    }

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form enctype="multipart/form-data" method="post">
Item No.<input name="itemno" /><br />
Item Name<input name="itemname" /><br />
Price<input name="price" /><br />
Qty.<input name="qty" /><br />
Image:<input type="file" name="image" /><br />
<input type="submit" value="Add" />
</form>
