<?php

require_once REPOSITORY_DIR . 'CategoryRepository.php';
require_once REPOSITORY_DIR . 'ProductRepository.php';

function indexAction(Smarty $smarty)
{
    $categories = getChildCategories(0);
    $products = getLastAddedProducts(8);

    return render($smarty, 'site/index', compact('categories', 'products'));
}
