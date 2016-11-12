<?php
    session_start();
    if (!isset($_SESSION['account'])){
        header("Location: login.php");
    }else{
        $account = $_SESSION['account'];
    }

    include "sql.php";

    if (isset($_REQUEST['itemno'])){
        // 要修改資料
        $like = $_REQUEST['like'];
        foreach ($like as $v){
            echo "{$v}<br />";
        }
    }else if (isset($_REQUEST['editid'])){
        // 要撈指定資料
    }


?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form>
    Item No.<input name="itemno" /><br />
    Item Name<input name="itemname" /><br />
    Price<input name="price" /><br />
    Qty.<input name="qty" /><br />
    <hr />
    <input type="checkbox" name="like[]" value="1"/>選項1
    <input type="checkbox" name="like[]" value="2" />選項2<br />
    <input type="checkbox" name="like[]" value="3" />選項3
    <input type="checkbox" name="like[]" value="4" />選項4
    <hr />
    <input type="radio" name="gender" />男生
    <input type="radio" name="gender" />女生
    <hr />
    <select name="area">
        <option>北屯區</option>
        <option>西屯區</option>
        <option>南屯區</option>
        <option>西區</option>
    </select>
    <hr />
    <textarea rows="10" cols="40" name="memo"></textarea>
    <hr />
    <input type="submit" value="Edit" />
</form>
