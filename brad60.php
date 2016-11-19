<?php

$password1 = '123456abcdefg';

//
$hash1 = password_hash($password1, PASSWORD_DEFAULT);
echo $hash1;
echo '<hr />';
$password2 = '123456abcdefg';
//
$hash2 = password_hash($password2, PASSWORD_DEFAULT);
echo $hash2;
echo '<hr />';
$input = '1234567abcdefg';
if (password_verify($input, $hash1)){
    echo 'OK';
}else{
    echo 'XX';
}

