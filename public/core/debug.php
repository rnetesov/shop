<?php

function d($expr)
{
    $params = debug_backtrace();
    echo '<code style="color: orangered">' . $params[0]['file'] . ' : ' . $params[0]['line'] . '<br>' . '</code>';
    echo '<pre>';
    var_dump($expr);
    echo '</pre>';
}

function dd($expr)
{
    d($expr);
    die();
}