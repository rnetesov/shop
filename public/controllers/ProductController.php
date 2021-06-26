<?php

require_once REPOSITORY_DIR . 'ProductRepository.php';
require_once SERVICES_DIR . 'CartService.php';

function indexAction(Smarty $smarty)
{
    $id = getProductId();
    $product = getProductById($id);

    if (!($product)) {
        throw new Exception('Товар не найден!');
    }

    $inCart = itemInCart($id);

    return render($smarty, 'product/index', compact('product', 'inCart'));
}