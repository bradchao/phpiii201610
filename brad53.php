<?php
include "sql.php";
$itemname = $_REQUEST['itemname'];
$sql = "INSERT INTO product (itemno,itemname,price,qty)" .
    " VALUES ('aaaa','{$itemname}',300,20)";
$mysqli->query($sql);