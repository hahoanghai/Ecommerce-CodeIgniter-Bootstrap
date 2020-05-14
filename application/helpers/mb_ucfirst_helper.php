<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

function mb_ucfirst($str, $encoding = "UTF-8", $lower_str_end = false)
{
    $first_letter = strtoupper(substr($str, 0, 1));
    $str_end = "";
    if ($lower_str_end) {
        $str_end = strtolower(substr($str, 1, strlen($str)));
    } else {
        $str_end = substr($str, 1, strlen($str));
    }
    $str = $first_letter . $str_end;
    return $str;
}
