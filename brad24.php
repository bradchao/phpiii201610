<?php
    $fp = fopen('./brad16.txt', 'w+');

    fwrite($fp, 'abcdefg');

    fclose($fp);
?>
