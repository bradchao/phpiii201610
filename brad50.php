<?php
    $cont = file_get_contents("books.xml");

    $xml = simplexml_load_string($cont);

    $errors = libxml_get_errors();
    foreach ($errors as $error){
        echo $errors->message;
    }

    var_dump($xml);
    echo '<hr>';
    echo $xml->getName() . ":" . $xml->count();
    echo '<hr>';
//    foreach ($xml as $k => $v){
//        echo gettype($v) . ':' . $v->getName() . '<br>';
//    }
    $attrs = $xml->book[0]->attributes();
    foreach ($attrs as $k => $v){
        echo "{$k} : {$v}<br>";
    }
    echo '<hr>';
    $authors = $xml->book[1]->authors->author;
    foreach ($authors as $who){
        echo "{$who}<br>";
    }



