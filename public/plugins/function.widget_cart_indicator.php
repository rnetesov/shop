<?php

require_once SERVICES_DIR . 'CartService.php';

function smarty_function_widget_cart_indicator(array $params, Smarty $smarty)
{
    $count = getTotalCntFromCart();
    $price = getTotalPriceFromCart();
    return render($smarty, 'plugins/widget_cart_indicator/index', compact('count', 'price'));
}