<?php /* Smarty version 2.6.31, created on 2021-06-22 04:39:05
         compiled from catalog/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'mb_ucfirst', 'catalog/index.tpl', 1, false),)), $this); ?>
<?php ob_start(); ?>Категория <?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('mb_ucfirst', true, $_tmp) : smarty_modifier_mb_ucfirst($_tmp)); ?>
<?php $this->_smarty_vars['capture']['title'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
    <h2 style="margin: 0">Категории</h2>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/category-list.tpl", 'smarty_include_vars' => array('categories' => $this->_tpl_vars['categories'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->_smarty_vars['capture']['content'] = ob_get_contents(); ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layouts/main.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>