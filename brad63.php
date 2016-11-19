<?php
    // 傳統的帳密比對機制
    if (isset($_POST['account'])){
        $account = $_POST['account'];
        $input = $_POST['password'];
        $sql = "SELECT * FROM member WHERE account=? and passwd=?";

        $pdo = @new PDO('mysql:host=localhost;dbname=mydb','root','root');

//        $result = $pdo->query($sql);
//        if ($result->rowCount()>0){
//            echo 'OK';
//        }else{
//            echo 'XX';
//        }

        $stmt = $pdo->prepare($sql);
        $rs = $stmt->execute(array($account,$input));
        var_dump($rs);



    }
?>

<form method="post">
    <input type="text" name="account" /><br>
    <input type="password" name="password" /><br>
    <input type="submit" value="Login" />
</form>
