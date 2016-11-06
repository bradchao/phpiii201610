<?php
    session_start();
    if (!isset($_SESSION['account'])){
        header("Location: login.php");
    }else{
        $account = $_SESSION['account'];
    }

    include "sql.php";
?>
Backend Page
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
            echo '</tr>';
        }
    ?>
</table>
















