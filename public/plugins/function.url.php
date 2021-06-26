<?php

function smarty_function_url(array $params, Smarty $smarty)
{
    $route = $params['route'] ?? '';
    $query = $params['query'] ?? '';
    $out = [];

    if (!empty($query)) {
        parse_str($query, $out);
    }

    $params = [];

    if (!empty($route)) {
        $params[] = $route;
    }

    if (!empty($out)) {
        foreach ($out as $key => $value) {
            $params[$key] = $value;
        }
    }

    return $url = url($params);
}