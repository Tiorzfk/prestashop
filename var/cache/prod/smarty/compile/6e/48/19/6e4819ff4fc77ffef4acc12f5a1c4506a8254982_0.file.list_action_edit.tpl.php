<?php
/* Smarty version 3.1.33, created on 2018-12-26 13:34:54
  from 'C:\xampp\htdocs\Prestashop\admin9027mtopt\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c23210e5ddb77_72806839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e4819ff4fc77ffef4acc12f5a1c4506a8254982' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin9027mtopt\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1545620883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c23210e5ddb77_72806839 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}