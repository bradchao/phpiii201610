<?php

    if (file_exists("../dir1/file1")){
        unlink("../dir1/file1");
        echo 'OK';
    }else{
        echo 'File Not Exist!';
    }

?>
