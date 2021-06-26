<?php /* Smarty version 2.6.31, created on 2021-06-22 04:07:39
         compiled from inc/category-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'inc/category-list.tpl', 2, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
    <a href="<?php echo smarty_function_url(array('route' => 'catalog','query' => "id=".($this->_tpl_vars['category']['id'])), $this);?>
" class="category-item">
        <div class="category-item">
            <?php if (( empty ( $this->_tpl_vars['category']['img'] ) )): ?>
                <?php $this->assign('img', "http://dummyimage.com/150"); ?>
            <?php else: ?>
                <?php $this->assign('img', $this->_tpl_vars['category']['img']); ?>
            <?php endif; ?>
            <img src="<?php echo $this->_tpl_vars['img']; ?>
" alt="">
            <h2><?php echo $this->_tpl_vars['category']['title']; ?>
</h2>
        </div>
    </a>
<?php endforeach; endif; unset($_from); ?>