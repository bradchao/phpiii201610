<?php
    session_start();
    if (!isset($_SESSION['account'])){
        header("Location: login.php");
    }else{
        $account = $_SESSION['account'];
    }
?>
Backend Page
<hr />
Welcome, <?php echo $account; ?><br />
<a href="logout.php">Logout</a>
<?php
