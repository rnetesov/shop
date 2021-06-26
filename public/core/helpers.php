<?php

function getUrl()
{
    return trim($_SERVER['REQUEST_URI'], '/');
}

function getUrlWithoutQueryString()
{
    $url = getUrl();
    $queryParamPos = strpos($url, '?');
    if ($queryParamPos !== false) {
        return substr($url, 0, $queryParamPos);
    }
    return substr($url, 0);
}

function toCamelCase($str)
{
    $parts = explode('-', $str);

    $res = array_map(function ($value) {
        return ucfirst($value);
    }, $parts);

    $res = implode('', $res);

    if (strpos($res, '_') !== false) {
        $parts = explode('_', $res);
        $res = array_map(function ($value) {
            return ucfirst($value);
        }, $parts);
        return implode('_', $res);
    }
    return $res;
}


/**
 * @param array $params
 * @return string
 *
 * params example array ['controller/action', 'id' => 1, 'name' => 'test']
 */
function url(array $params): string
{
    $url = SERVER_ADDRESS;

    if (!empty($params)) {
        $url .= $params[0];
        unset($params[0]);
        if (!empty($params)) {
            $url .= '?';
            foreach ($params as $key => $value) {
                if (is_array($params[$key])) {
                    foreach ($params[$key] as $val) {
                        $url .= $key . '[]=' . $val . '&';
                    }
                } else {
                    $url .= $key . '=' . $value . '&';
                }
            }
            $url = rtrim($url, '&');
            return $url;
        }
        return $url;
    }
    return '';
}

function toJson(array $data, int $flags = JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
{
    return json_encode($data, $flags);
}

