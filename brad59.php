<?php
    $account = $_REQUEST['account'];

    // use PDO
    $dsn = "mysql:host=localhost;dbname=mydb";  // Data Source Name
    $mydb = new PDO($dsn, "root", "root");

    $stmt = $mydb->query("select * from member where account='{$account}'");
    if ( $stmt->rowCount()>0){
        echo 'ＸＸＸＸＸＸ';
    }else{
        echo 'OK';
    }