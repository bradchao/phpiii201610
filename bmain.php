<?php
    session_start();
    if (!isset($_SESSION['account'])){
        header("Location: login.php");
    }else{
        $account = $_SESSION['account'];
    }

    include "sql.php";

    if (isset($_GET['delid'])){
        // 剛剛有按下Delete的功能
        $delid = $_GET['delid'];
        $sql = "DELETE FROM product WHERE id = {$delid}";
        $mysqli->query($sql);
    }


?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
    function delWarn(pname){
        var ret = confirm('Delete ' + pname + ' ?');
        return ret;
    }
</script>

後台管理
<hr />
Welcome, <?php echo $account; ?><br />
<a href="logout.php">Logout</a>
<hr />
<a href="addProduct.php">Add Product</a>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>Item No.</th>
        <th>Name</th>
        <th>Price</th>
        <th>Qty.</th>
        <th>Ｄelete</th>
    </tr>
    <?php
        $sql = "SELECT * FROM product ORDER BY itemname";
        $result = $mysqli->query($sql);
        while ( $row = $result->fetch_assoc()){
            echo '<tr>';
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['itemno']}</td>";
            echo "<td>{$row['itemname']}</td>";
            echo "<td>{$row['price']}</td>";
            echo "<td>{$row['qty']}</td>";
            echo "<td><a href=\"?delid={$row['id']}\" onclick='return delWarn(\"{$row['itemname']}\");'>Delete</a></td>";
            echo '</tr>';
        }
    ?>
</table>
















