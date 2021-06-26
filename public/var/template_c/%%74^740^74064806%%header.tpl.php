<?php /* Smarty version 2.6.31, created on 2021-06-22 11:17:45
         compiled from layouts/inc/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'widget_cart_indicator', 'layouts/inc/header.tpl', 3, false),)), $this); ?>
<div id="header">
    <h2><a href="/">Интернет магазин цифровой техники</a></h2>
    <?php echo smarty_function_widget_cart_indicator(array(), $this);?>

</div>