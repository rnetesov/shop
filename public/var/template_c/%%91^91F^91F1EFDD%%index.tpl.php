<?php /* Smarty version 2.6.31, created on 2021-06-22 03:02:03
         compiled from errors/index.tpl */ ?>
<?php ob_start(); ?>Магазин цифровой техники<?php $this->_smarty_vars['capture']['title'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
    <?php echo $this->_tpl_vars['message']; ?>

<?php $this->_smarty_vars['capture']['content'] = ob_get_contents(); ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layouts/main.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>