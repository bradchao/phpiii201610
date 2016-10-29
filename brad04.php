<?php
date_default_timezone_set('Asia/Taipei');
$result = $x = $y = $op = '';
if ( isset($_GET['x']) ){
    $x = $_GET['x']; $y = $_GET['y'];

    $op = $_GET['op'];
    switch ($op){
        case 1: $result = $x + $y; break;
        case 2: $result = $x - $y; break;
        case 3: $result = $x * $y; break;
        case 4: $result = $x / $y; break;
    }
}

?>
<form>
    <input type='text' name='x'
           value='<?php echo $x; ?>' />

    <select name='op'>
        <option value='1' <?php echo ($op=='1')?'selected':''; ?>>+</option>
        <option value='2' <?php echo ($op=='2')?'selected':''; ?>>-</option>
        <option value='3' <?php echo ($op=='3')?'selected':''; ?>>x</option>
        <option value='4' <?php echo ($op=='4')?'selected':''; ?>>/</option>
    </select>

    <input type='text' name='y'
           value='<?php echo $y; ?>' />
    <input type='submit' value='=' />
    <?php echo $result; ?>
</form>
