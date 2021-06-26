<?php /* Smarty version 2.6.31, created on 2021-06-22 11:35:54
         compiled from plugins/widget_cart_indicator/index.tpl */ ?>
<a href="#" style="display: block; color: #fff">
    <div class="cart-widget">
        <img src="/img/cart.png" alt="">
        <?php if ($this->_tpl_vars['count']): ?>
            <span class="cnt"><?php echo $this->_tpl_vars['count']; ?>
</span>
        <?php endif; ?>
        <span class="price">
            <?php if ($this->_tpl_vars['price']): ?>
                <?php echo $this->_tpl_vars['price']; ?>
 ₽
            <?php else: ?>
                Корзина
            <?php endif; ?>
        </span>
    </div>
</a>