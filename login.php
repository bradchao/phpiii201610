<?php
    session_start();

    if (isset($_POST['account'])){
        $account = $_POST['account'];
        $passwd = $_POST['passwd'];

//        // Option 1:
        $mysqli = @new mysqli('127.0.0.1','root','root', 'mydb');

        // Option 2:
//        $mysqli = mysqli_init();
//        @$mysqli->real_connect('127.0.0.1','root','root','mydb3');
//
//        if ( $error = mysqli_connect_error()){
//            echo $error;
//            die("Server Busy");
//        }
//        // ......
//        $mysqli->close();

        $sql = "SELECT account,passwd,type FROM member WHERE account='{$account}' AND passwd='{$passwd}'";
        $resullt = $mysqli->query($sql);
        if ($error = $mysqli->error){echo $error;}

        if ($resullt->num_rows == 1){
            // 登入成功
            $row = $resullt->fetch_assoc();
            if ($row['type'] == 0){
                // 視為網站管理員
                $_SESSION['account'] = $row['account'];
                header("Location: bmain.php");
            }else{
                // 一般帳號
            }
        }else{
            echo 'Login Fail...';
        }







    }
?>
<form method="post">
    Account: <input name="account" /><br />
    Password: <input type='password' name="passwd" /><br />
    <input type="submit" value="Login" />
</form>














