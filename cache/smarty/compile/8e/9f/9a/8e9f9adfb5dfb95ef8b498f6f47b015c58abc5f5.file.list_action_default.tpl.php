<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 06:11:40
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/admin/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213628519652b05b9cb4e7e6-04677283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e9f9adfb5dfb95ef8b498f6f47b015c58abc5f5' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/admin/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1387285482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213628519652b05b9cb4e7e6-04677283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b05b9cb8a2b9_74296553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b05b9cb8a2b9_74296553')) {function content_52b05b9cb8a2b9_74296553($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>>
	<img src="../img/admin/asterisk.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>