<a href="#" style="display: block; color: #fff">
    <div class="cart-widget">
        <img src="/img/cart.png" alt="">
        {if $count}
            <span class="cnt">{$count}</span>
        {/if}
        <span class="price">
            {if $price }
                {$price} ₽
            {else}
                Корзина
            {/if}
        </span>
    </div>
</a>
