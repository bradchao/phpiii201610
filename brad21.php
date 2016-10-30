<?php
    if (isset($_GET['newdir'])){
        $newdir = $_GET['newdir'];
        $fp = @opendir($newdir);

    }
?>
<form>
    <input type='text' name="newdir" />
    <input type="submit" value="cd" />
</form>
<hr />
<table border="1" width="100%">
    <tr>
        <th>Filename</th>
        <th>Type</th>
        <th>Size</th>
        <th>mTime</th>
    </tr>
    <?php
    if (isset($fp) && $fp){
        while ($file = readdir($fp)){
            echo '<tr>';
            echo "<td>{$file}</td>";
            echo "<td>" . filetype("{$newdir}/{$file}") . "</td>";
            echo "<td>" . filesize("{$newdir}/{$file}") . " bytes</td>";
            echo "<td>" . date('Y-m-d H:i:s',filemtime("{$newdir}/{$file}")) . "</td>";
            echo '</tr>';
        }
    }
    ?>
</table>
