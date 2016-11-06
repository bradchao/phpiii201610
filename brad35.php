<?php
    // 1. connect to SQL Server : MySQL
    // mysql -u root -p
    $conn = @mysql_connect('127.0.0.1','root','root') or die('Server Busy');

    // 2. select a database
    // use [db name]
    @mysql_select_db('mydb', $conn) or die ('DATABASE ERROR');

    // 3. execute SQL language
//    $sql_insert =
//        'INSERT INTO member (account,passwd,birthday) VALUES ("tony","123","1999-02-09")';
//    $sql_delete =
//        'DELETE FROM member WHERE id = 14';
//    $sql_update =
//        'UPDATE member SET account="brad",passwd="321" WHERE id = 13';
//
//    if (!@mysql_query($sql_update)){
//        echo 'SQL ERROR';
//    }

        $sql_query = 'SELECT * FROM member';
        if ($rs = @mysql_query($sql_query)){
            while( $row = @mysql_fetch_assoc($rs)) {
                echo "{$row['id']} : {$row['account']} : {$row['birthday']}<br>";
            }
        }else{
            echo 'SQL ERROR';
        }


?>



















