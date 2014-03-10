<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 18:30:57
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/admin3102/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140560485852b06021b5dd64-18412730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24279cacbc7b4194b45039941e35077d0d4c832d' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/admin3102/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1387285483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140560485852b06021b5dd64-18412730',
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
  'unifunc' => 'content_52b06021b77391_42431665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06021b77391_42431665')) {function content_52b06021b77391_42431665($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>