<?php
/* Smarty version 3.1.30, created on 2018-03-27 11:48:52
  from "/var/www/html/Plantform_new/application/views/student/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab9bf248f2f72_27506997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f6090b67853b668931dc1240493809e97637a2d' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/student/index.html',
      1 => 1522122528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./container.tpl' => 1,
  ),
),false)) {
function content_5ab9bf248f2f72_27506997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15461301035ab9bf248f2052_02226774', 'container');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'} */
class Block_15461301035ab9bf248f2052_02226774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <iframe src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
course/showAllCourse" id="window" style="width: 100%; height: 100%; border:0px;" scrolling="no"></iframe>

<?php
}
}
/* {/block 'container'} */
}
