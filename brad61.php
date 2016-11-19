<?php
    if (isset($_POST['account'])){
        $account = $_POST['account'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO member SET account='{$account}' , passwd='{$password}'";
        echo $sql .'<br>';

        try{
            $opt = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];

            $pdo = @new PDO('mysql:host=localhost;dbname=mydb','root','root',$opt);
            $pdo->query($sql);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
?>

<form method="post">
    <input type="text" name="account" /><br>
    <input type="password" name="password" /><br>
    <input type="submit" name="what" value="Add" />
</form>
