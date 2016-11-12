<?php
//    $fp = fopen("http://m.coa.gov.tw/OpenData/FarmerMarketData.aspx",'r');
//    $json = fgets($fp);
//    fclose($fp);

    $json = file_get_contents("http://data.coa.gov.tw/Service/OpenData/DataFileService.aspx?UnitId=102");

    $root  = json_decode($json);
    foreach ($root as $rowObj){
        $name = $rowObj->name;
        $mamager = $rowObj->manager;
        echo "{$name} : {$mamager}<hr />";
    }