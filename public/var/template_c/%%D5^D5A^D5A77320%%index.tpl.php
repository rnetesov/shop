<?php /* Smarty version 2.6.31, created on 2021-06-22 04:40:42
         compiled from site/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'site/index.tpl', 14, false),)), $this); ?>
<?php ob_start(); ?>Магазин цифровой техники<?php $this->_smarty_vars['capture']['title'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
    <h2 style="margin: 0">Главные категории</h2>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/category-list.tpl", 'smarty_include_vars' => array('categories' => $this->_tpl_vars['categories'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="clear"></div>

    <div class="last-added-items">
        <h2 class="head">Последние поступления</h2>

        <?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
            <a class="item" href="<?php echo smarty_function_url(array('route' => 'product','query' => "id=".($this->_tpl_vars['product']['id'])), $this);?>
">
                <div class="item">
                    <h2 class="title"><?php echo $this->_tpl_vars['product']['title']; ?>
</h2>
                    <img class="img" src="<?php echo $this->_tpl_vars['product']['img']; ?>
"
                         alt="">
                    <p class="price"><?php echo $this->_tpl_vars['product']['price']; ?>
 &#8381;</p>
                </div>
            </a>
        <?php endforeach; endif; unset($_from); ?>
    </div>
<?php $this->_smarty_vars['capture']['content'] = ob_get_contents(); ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layouts/main.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>