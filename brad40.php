<?php
    $rate = $_GET['rate'];

    // 1. 畫布
    $rs = ImageCreateTrueColor (400 , 40 );

    // 2. 開始作畫
    $red = ImageColorAllocate($rs, 255, 0, 0);
    $yellow = ImageColorAllocate($rs, 255, 255, 0);
    ImageFill ($rs , 0, 0,$red);
    ImageFilledRectangle($rs, 0, 0, (int)(400*$rate/100), 40, $yellow);

    // 3. 輸出
    header('Content-Type: image/jpeg');
    ImageJpeg($rs);

    // 4. 清除記憶體
    ImageDestroy ($rs);