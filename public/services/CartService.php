<?php

function addToCart(int $id, int $cnt, $price)
{
    $cart = getCart();

    if (empty($cart)) {
        $cart = [$id => ['cnt' => $cnt, 'price' => $price * $cnt]];
        $cart['total_cnt'] = $cnt;
        $cart['total_price'] = $price * $cnt;
    } else {
        if (array_key_exists($id, $cart)) {
            $cart[$id]['cnt'] += $cnt;
            $cart[$id]['price'] += $price * $cnt;
        } else {
            $cart[$id]['cnt'] = $cnt;
            $cart[$id]['price'] = $price * $cnt;
        }
        $cart['total_cnt'] += $cnt;
        $cart['total_price'] += $price * $cnt;
    }
    saveCart($cart);
}

function getTotalCntFromCart()
{
    $cart = getCart();
    return (array_key_exists('total_cnt', $cart)) ? $cart['total_cnt'] : 0;
}

function getTotalPriceFromCart()
{
    $cart = getCart();
    return (array_key_exists('total_price', $cart)) ? $cart['total_price'] : 0;
}

function removeFromCart($id) : bool
{
    $cart = getCart();

    if (!empty($cart) && array_key_exists($id, $cart)) {
        $item = $cart[$id];
        unset($cart[$id]);
        $cart['total_cnt'] -= $item['cnt'];
        $cart['total_price'] -= $item['price'];
        saveCart($cart);
        return true;
    }

    return false;
}

function itemInCart($id) : bool
{
    $cart = getCart();
    return array_key_exists($id, $cart);
}

function clearCart()
{
    saveCart();
}

function getCart(): array
{
    return $_SESSION['cart'] ?? $_SESSION['cart'] = [];
}

function saveCart(array $cart = [])
{
    $_SESSION['cart'] = $cart;
}
