<?php
    $mysqli = @new mysqli('127.0.0.1','root','root', 'mydb');

    //$mysqli->set_charset("utf8");
    mysqli_set_charset($mysqli, 'utf8');

?>
