<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 06:11:40
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1877491252b05b9cca9e17-57273833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9131c412e486aa7562b7871682eb511220514162' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1387285484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1877491252b05b9cca9e17-57273833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b05b9ccc4c37_14853315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b05b9ccc4c37_14853315')) {function content_52b05b9ccc4c37_14853315($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>