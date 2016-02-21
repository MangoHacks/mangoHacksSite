<?php

define('ENCRYPTION_KEY',"She's a killer queeeeeeeeen!");


// Simple Encryption
function simple_encrypt($url = '') {
    return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(ENCRYPTION_KEY), $url, MCRYPT_MODE_CBC, md5(md5(ENCRYPTION_KEY))));
}
function simple_decrypt($string = '') {
    $return = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5(ENCRYPTION_KEY), base64_decode($string), MCRYPT_MODE_CBC, md5(md5(ENCRYPTION_KEY))), "\0");
    return (ctype_print($return)) ? $return : false;
}