<?php
    if (isset($_POST['account'])){
        $account = $_POST['account'];
        $input = $_POST['password'];
        $sql = "SELECT * FROM member WHERE account='{$account}'";

        $pdo = @new PDO('mysql:host=localhost;dbname=mydb','root','root');
        $result = $pdo->query($sql);
        $row = $result->fetch();
        if (password_verify($input, $row['passwd'])){
            echo 'OK';
        }else{
            echo 'XX';
        }

    }
?>

<form method="post">
    <input type="text" name="account" /><br>
    <input type="password" name="password" /><br>
    <input type="submit" value="Login" />
</form>
