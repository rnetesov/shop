<?php /* Smarty version 2.6.31, created on 2021-06-22 04:39:44
         compiled from catalog/products.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'mb_ucfirst', 'catalog/products.tpl', 1, false),array('function', 'url', 'catalog/products.tpl', 6, false),)), $this); ?>
<?php ob_start(); ?>Категория <?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('mb_ucfirst', true, $_tmp) : smarty_modifier_mb_ucfirst($_tmp)); ?>
<?php $this->_smarty_vars['capture']['title'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
    <h2 style="margin: 0">Товары</h2>
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
    <?php endforeach; else: ?>
        <p>В данной категории товары пока отстутствуют!</p>
    <?php endif; unset($_from); ?>
<?php $this->_smarty_vars['capture']['content'] = ob_get_contents(); ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layouts/main.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>