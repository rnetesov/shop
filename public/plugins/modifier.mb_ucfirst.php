<?php

function smarty_modifier_mb_ucfirst($string, $encoding = 'UTF-8')
{
    $str = mb_ereg_replace('^[\ ]+', '', $string);
    return mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding) .
        mb_substr($str, 1, mb_strlen($str), $encoding);
}