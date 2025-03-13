<?php 

function encode($number) {
    $base62 = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $result = '';

    while($number > 0) {
        $result = $base62[$number % 62] . $result;
        $number = (int)($number / 62);
    }
    return $result;
}

echo encode(1234567890);
