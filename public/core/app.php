<?php

function getRouteParams()
{

    $route = trim(PRETTY_URL ? getUrlWithoutQueryString() : $_GET['r'] ?? $_GET['route'], '/');

    if (!is_null($route) && !empty($route)) {
        $parts = explode('/', $route);
        $controller = $parts[0];
        $action = $parts[1] ?? DEFAULT_ACTION;
        unset($parts[0], $parts[1]);
        $params = $parts;
        return [
            'controller' => $controller,
            'action' => $action,
            'params' => $params
        ];
    } else {
        return [
            'controller' => DEFAULT_CONTROLLER,
            'action' => DEFAULT_ACTION,
            'params' => []
        ];
    }
}

function runRoute(array $params, Smarty $smarty)
{
    $controllerName = toCamelCase($params['controller']);

    $controllerFile = __DIR__ . '/../controllers/' . str_replace('_', '/', $controllerName) . 'Controller.php';

    if (!file_exists($controllerFile)) {
        throw new Exception('Контроллер <b>' . $controllerName . '</b>' . ' не найден <br>');
    }

    require_once $controllerFile;

    $actionName = lcfirst(toCamelCase($params['action']) . 'Action');

    if (!function_exists($actionName)) {
        throw new Exception('Действие <b>' . $actionName . ' не найдено <br>');
    }

    return $actionName($smarty);
}

function render(Smarty $smarty, $view, array $params = [])
{
    if (!empty($params)) {
        foreach ($params as $key => $value) {
            $smarty->assign($key, $value);
        }
    }
    return $smarty->fetch($view . TEMPLATE_EXT);
}