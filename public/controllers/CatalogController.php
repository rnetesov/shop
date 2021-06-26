<?php

require_once REPOSITORY_DIR . 'CategoryRepository.php';
require_once REPOSITORY_DIR . 'ProductRepository.php';

/**
 * @throws Exception
 */
function indexAction(Smarty $smarty)
{
    $id = getCategoryId();

    $category = getCategoryById($id);

    if (!$category) {
        throw new Exception('Категория не найдена!');
    }

    $title = $category['title'];
    $categories = getChildCategories($id);

    if (!empty($categories)) {
        return render($smarty, 'catalog/index', compact('categories', 'title'));
    } else {
        $products = getProductsByCategory($id);
        return render($smarty, 'catalog/products', compact('products', 'title'));
    }
}
