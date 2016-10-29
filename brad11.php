<?php
    $n = $sum = '';
    if (isset($_GET['n'])){
        $n = $_GET['n'];
        $i = $sum = 0;
        while ($i<=$n){
            $sum += $i++;
        }
    }

?>
<form>
    1 + 2 + ... +
    <input name='n' value="<?php echo $n; ?>"/>
    <input type='submit' value="=" />
    <?php echo $sum; ?>
</form>
