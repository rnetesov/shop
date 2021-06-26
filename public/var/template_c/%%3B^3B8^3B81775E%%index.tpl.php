<?php /* Smarty version 2.6.31, created on 2021-06-22 11:08:32
         compiled from plugins/widget_categories/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'plugins/widget_categories/index.tpl', 4, false),)), $this); ?>
<ul>
    <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
        <li>
            <a href="<?php echo smarty_function_url(array('route' => 'catalog','query' => "id=".($this->_tpl_vars['category']['id'])), $this);?>
"><?php echo $this->_tpl_vars['category']['title']; ?>
</a>
            <?php if (isset ( $this->_tpl_vars['category']['children'] )): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "plugins/widget_categories/index.tpl", 'smarty_include_vars' => array('categories' => $this->_tpl_vars['category']['children'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        </li>
    <?php endforeach; endif; unset($_from); ?>
</ul>