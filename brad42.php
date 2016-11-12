<?php
    // 1. 畫布
    $rs = ImageCreateFromJpeg ( "bg.jpg");

    // 2. 開始作畫
    $blue = ImageColorAllocate($rs, 0, 0, 255);
    ImageTTFText ( $rs , 24 , 315 , 100 , 400 ,$blue, "./brad.ttf" , "Hello, World");

    // 3. 輸出
    //header('Content-Type: image/jpeg');
    ImageJpeg($rs, "bg2.jpg");

    // 4. 清除記憶體
    ImageDestroy ($rs);