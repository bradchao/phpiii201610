<?php
    // 1. 畫布
    $src = ImageCreateFromJpeg ( "h.jpeg");
    $dst = ImageCreateTrueColor (100 , 100);
    $src_w = ImageSX($src); $src_h = ImageSY($src);

    if ($src_w >= $src_h){
        // 橫的
        $dst_w = 100;
        $dst_h = $src_h * 100 / $src_w;

        $dst_x = 0;
        $dst_y = 100/2 - $dst_h/2;
    }else{
        // 直的
        $dst_h = 100;
        $dst_w = $src_w * 100 / $src_h;

        $dst_y = 0;
        $dst_x = 100/2 - $dst_w/2;
    }

    // 2. 開始作畫
    $white = ImageColorAllocate($dst,255,255,255);
    ImageFill($dst, 0, 0 ,$white);
    ImageCopyResized ($dst , $src, $dst_x , $dst_y, 0 , 0 ,
        $dst_w , $dst_h , $src_w , $src_h);

    // 3. 輸出
    header('Content-Type: image/jpeg');
    ImageJpeg($dst);

    // 4. 清除記憶體
    ImageDestroy ($dst);    ImageDestroy ($src);