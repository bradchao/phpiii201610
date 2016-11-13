<?php
include "sql.php";
?>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>Item No.</th>
        <th>Name</th>
        <th>Price</th>
        <th>Qty.</th>
    </tr>
    <?php
        $sql = "SELECT * FROM product ORDER BY id limit 0, 10 ";
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
