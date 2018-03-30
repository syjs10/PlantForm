<?php
/* Smarty version 3.1.30, created on 2018-03-20 15:58:42
  from "/var/www/html/Plantform_new/application/views/admin/optTeacher.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab0bf32e42902_96870282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60f72a7cb52ab13a94b3c6845fa58a359370771a' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/admin/optTeacher.html',
      1 => 1521529546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./hflayout.tpl' => 1,
  ),
),false)) {
function content_5ab0bf32e42902_96870282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4535005085ab0bf32e1caa6_14370632', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14847715045ab0bf32e3f573_13739183', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./hflayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_4535005085ab0bf32e1caa6_14370632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function setIframeHeight(iframe) {
            if (iframe) {
                var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
                if (iframeWin.document.body) {
                    iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
                }
            }
        };

        window.onload = function () {
            setIframeHeight(document.getElementById('window'));
        };

        function changePage(page) {
            var window = document.getElementById('window');
            window.src=page;

        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_14847715045ab0bf32e3f573_13739183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">操作</div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item" onclick="changePage('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/addTeacher')">添加教师</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12"><iframe src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/admin/addTeacher" id="window" style="width: 100%; height: 100%; border:0px;"></iframe></div>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
