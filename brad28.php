<?php
    require_once 'bradapi.php';
    session_start();

    if (!isset($_SESSION['a'])) {
        header("Location: brad27.php");
    }

?>
Page2
<hr />
<?php
    $myB = $_SESSION['a'];

    echo $myB->a . '<hr>';
    foreach ($myB->array as $v){
        echo "{$v}<br>";
    }
?>