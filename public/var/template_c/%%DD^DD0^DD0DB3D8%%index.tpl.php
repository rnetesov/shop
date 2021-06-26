<?php /* Smarty version 2.6.31, created on 2021-06-22 12:37:10
         compiled from product/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'product/index.tpl', 15, false),)), $this); ?>
<?php ob_start(); ?> <?php echo $this->_tpl_vars['product']['title']; ?>
 <?php $this->_smarty_vars['capture']['title'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
    <div class="product-item">
        <h2><?php echo $this->_tpl_vars['product']['title']; ?>
</h2>
        <img class="img" src="<?php echo $this->_tpl_vars['product']['img']; ?>
" alt="">
        <p class="price">
            <?php if (! empty ( $this->_tpl_vars['product']['old_price'] )): ?>
                <s><?php echo $this->_tpl_vars['product']['old_price']; ?>
 р.</s>
                &nbsp;
            <?php endif; ?>
            <?php echo $this->_tpl_vars['product']['price']; ?>
 р.
        </p>
        <?php if (! $this->_tpl_vars['inCart']): ?>
            <a href="<?php echo smarty_function_url(array('route' => "cart/add",'query' => "id=".($this->_tpl_vars['product']['id'])), $this);?>
" class="btn-cart to-cart">В корзину</a>
        <?php else: ?>
            <a href="#" class="btn-cart in-cart">Добавлен</a>
        <?php endif; ?>

        <h2 class="title">Описание</h2>
        <p class="desc"><?php echo $this->_tpl_vars['product']['description']; ?>
</p>
    </div>
<?php $this->_smarty_vars['capture']['content'] = ob_get_contents(); ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layouts/main.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
    <script>
        let inCartElem = document.querySelector(\'.product-item .to-cart\');
        if (inCartElem) {
            inCartElem.onclick = async function (e) {
                e.preventDefault();

                let response = await fetch(this.href);
                let json = await response.json();

                if (json.success) {
                    this.classList.remove(\'to-cart\');
                    this.classList.add(\'in-cart\');

                    let widgetResponse = await fetch(\'/cart/ajax-cart-widget-indicator\')
                    let widgetHtml = await widgetResponse.text();

                    let cartWidget = document.querySelector(\'#header .cart-widget\');
                    cartWidget.outerHTML = widgetHtml;
                    this.text = \'Добавлен\';

                } else {
                    if (json.error) {
                        console.log(\'Произошла ошибка при добавлении товара в корзину\');
                    }
                }
            }
        }
    </script>
'; ?>