<?php
    $data = array(
        array("name"=>"蘇花步道","manager"=>"AAA"),
        array("name"=>"朝陽步道","manager"=>"BBB"),
        array("name"=>"陽明山步道","manager"=>"CCC"),
        array("name"=>"大坑步道","manager"=>"DDD")
    );

    $data2 = array("name"=>"蘇花步道","manager"=>"AAA");

    $json = json_encode($data2);
    echo $json;