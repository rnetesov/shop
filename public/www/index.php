<?php

session_start();

require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../core/debug.php';
require_once __DIR__ . '/../core/helpers.php';
require_once __DIR__ . '/../core/app.php';
require_once __DIR__ . '/../core/db.php';

try {
    $smarty = require_once __DIR__ . '/../config/smarty.php';
    $routeParams = getRouteParams();
    $content = runRoute($routeParams, $smarty);
    echo $content;
} catch (Exception $e) {
    $message = $e->getMessage();
    echo render($smarty, 'errors/index', compact('message'));
}

?>