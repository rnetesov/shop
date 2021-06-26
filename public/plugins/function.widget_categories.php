<?php

require_once REPOSITORY_DIR . 'CategoryRepository.php';

function smarty_function_widget_categories(array $params, Smarty $smarty)
{
    $categories = getTreeCategories();
    return render($smarty, 'plugins/widget_categories/index', compact('categories'));
}