<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 06:11:29
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/admin/themes/default/template/controllers/not_found/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77739546252b05b91822934-68467888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '296e7de4910007d780147d771774466dcb978a85' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/admin/themes/default/template/controllers/not_found/content.tpl',
      1 => 1387285415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77739546252b05b91822934-68467888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b05b918510e2_55596478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b05b918510e2_55596478')) {function content_52b05b918510e2_55596478($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['controller']->value)&&!empty($_smarty_tpl->tpl_vars['controller']->value)&&$_smarty_tpl->tpl_vars['controller']->value!='adminnotfound'){?>
<h1><?php echo smartyTranslate(array('s'=>'The controller %s is missing or invalid.','sprintf'=>$_smarty_tpl->tpl_vars['controller']->value),$_smarty_tpl);?>
</h1>
<?php }?>
<ul>
<li><a href="index.php"><?php echo smartyTranslate(array('s'=>'Go to the dashboard.'),$_smarty_tpl);?>
</a></li>
<li><a href="#" onclick="window.history.back();"><?php echo smartyTranslate(array('s'=>'Back to the previous page.'),$_smarty_tpl);?>
</a></li>
</ul>
<?php }} ?>