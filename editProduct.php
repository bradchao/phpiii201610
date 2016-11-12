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
//        $like = $_REQUEST['like'];
//        echo 'Like=';
//        foreach ($like as $v){
//            echo "{$v};";
//        }
//        echo '<br>';
//        $gender = $_REQUEST['gender'];
//        echo "Gender={$gender}";
//        echo '<br>';
//        $zipcode = $_REQUEST['area'];
//        echo "Zipcode={$zipcode}";
//        echo '<hr />';

        $updateid = $_GET['updateid'];
        $itemno = $_GET['itemno']; $itemname = $_GET['itemname'];
        $price = $_GET['price']; $qty = $_GET['qty'];
        $sql = "UPDATE product SET itemno='{$itemno}',itemname='{$itemname}',price='{$price}',qty='{$qty}'" .
            " WHERE id = {$updateid}";
        $result = $mysqli->query($sql);
        header("Location: bmain.php");

    }else if (isset($_REQUEST['editid'])){
        // 要撈指定資料
        $editid = $_REQUEST['editid'];
        $sql = "SELECT * FROM product WHERE id = {$editid}";
        $result = $mysqli->query($sql);
        $editdata = $result->fetch_object();
        $itemno = $editdata->itemno;
        $itemname = $editdata->itemname;
        $price = $editdata->price;
        $qty = $editdata->qty;

    }


?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form>
    <input type="hidden" name="updateid" value="<?php echo $editid; ?>" />
    Item No.<input name="itemno" value="<?php echo $itemno; ?>"/><br />
    Item Name<input name="itemname" value="<?php echo $itemname; ?>" /><br />
    Price<input name="price" value="<?php echo $price; ?>" /><br />
    Qty.<input name="qty" value="<?php echo $qty; ?>" /><br />
    <hr />
    <input type="checkbox" name="like[]" value="1"/>選項1
    <input type="checkbox" name="like[]" value="2" />選項2<br />
    <input type="checkbox" name="like[]" value="3" />選項3
    <input type="checkbox" name="like[]" value="4" />選項4
    <hr />
    <input type="radio" name="gender" value="male" />男生
    <input type="radio" name="gender" value="female" />女生
    <hr />
    <select name="area">
        <option value="406">北屯區</option>
        <option value="407">西屯區</option>
        <option value="408">南屯區</option>
        <option value="409">西區</option>
    </select>
    <hr />
    <textarea rows="10" cols="40" name="memo"></textarea>
    <hr />
    <input type="submit" value="Edit" />
</form>
