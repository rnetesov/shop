<?php

const SMARTY_DIR = __DIR__ . '/../libs/smarty/';
const TEMPLATE_EXT = '.tpl';

require_once SMARTY_DIR . 'Smarty.class.php';

$smarty = new Smarty();

$smarty->template_dir = __DIR__ . '/../views/smarty';
$smarty->compile_dir = __DIR__ . '/../var/template_c';
$smarty->config_dir = __DIR__ . '/smarty';
$smarty->cache_dir = __DIR__ . '/../var/cache/smarty';
$smarty->plugins_dir[] = __DIR__ . '/../plugins';

$smarty->assign('title', 'Магазин одежды');

//$smarty->debugging = true;

return $smarty;