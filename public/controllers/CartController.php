<?php

require_once REPOSITORY_DIR . 'ProductRepository.php';
require_once SERVICES_DIR . 'CartService.php';

function addAction()
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = getProductId();
        $cnt = getCntItems();

        $product = getProductById($id);

        if (empty($product)) {
            return toJson([
                'error' => 'Товар с индентификатором ' . $id . ' не найден'
            ]);
        }

        addToCart($id, $cnt, $product['price']);

        return toJson([
            'success' => 'Товар был успешно добавлен в корзину'
        ]);
    }

    return toJson([
        'error' => 'Неподдерживаемый метод!'
    ]);
}

function deleteAction()
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = getProductId();

        $product = getProductById($id);

        if (empty($product)) {
            return toJson([
                'error' => 'Товар с индентификатором ' . $id . ' не найден'
            ]);
        }

        if (removeFromCart($id)) {
            return toJson([
                'success' => 'Товар был успешно удален из корзины'
            ]);
        }

        return toJson([
            'error' => 'Товар в корзине отсутствует!'
        ]);
    }

    return toJson([
        'error' => 'Неподдерживаемый метод!'
    ]);
}

function clearAction()
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        clearCart();
        return toJson([
            'success' => 'Корзина была успешно очищена'
        ]);
    }

    return toJson([
        'error' => 'Неподдерживаемый метод!'
    ]);
}

function indexAction()
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        return toJson([
            'success' => 'ok',
            'cart' => getCart()
        ]);
    }

    return toJson([
        'error' => 'Неподдерживаемый метод!'
    ]);
}

// /cart/ajax-cart-widget-indicator

function ajaxCartWidgetIndicatorAction(Smarty $smarty)
{
    return render($smarty, 'ajax/cart/widget-indicator');
}

function getCntItems(): int
{
    $cnt = $_GET['cnt'] ?? null;

    if (isset($cnt) && !empty($cnt) && is_numeric($cnt)) {
        return $_GET['cnt'];
    } else {
        return 1;
    }
}

/**
 * /cart/add-item/12
 * /cart
 */