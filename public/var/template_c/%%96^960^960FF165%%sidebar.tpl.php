<?php /* Smarty version 2.6.31, created on 2021-06-22 11:04:45
         compiled from layouts/inc/sidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'widget_categories', 'layouts/inc/sidebar.tpl', 3, false),)), $this); ?>
<div id="sidebar">
    <nav>
        <?php echo smarty_function_widget_categories(array(), $this);?>

    </nav>
</div>