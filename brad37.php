<?php
    if (isset($_FILES['upload'])){
        $upload = $_FILES['upload'];
        foreach ($upload['error'] as $index => $errorno){
            if ($errorno == 0){
                copy($upload['tmp_name'][$index],
                    "upload/{$upload['name'][$index]}");
            }
        }
    }
?>