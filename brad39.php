<?php
    $data = array(
        array("name"=>urlencode("蘇花步道"),"manager"=>"AAA"),
        array("name"=>"朝陽步道","manager"=>urlencode("BBB")),
        array("name"=>"陽明山步道","manager"=>"CCC"),
        array("name"=>"大坑步道","manager"=>"DDD")
    );


    $data2 = array("name"=>"蘇花步道","manager"=>"AAA");

    $json = urldecode(json_encode($data));
    echo $json;