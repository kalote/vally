<?php /* Smarty version Smarty-3.1.14, created on 2014-01-27 15:14:47
         compiled from "/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206190770452e63fa70cd565-11527905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd34b18732f90620d756420afa9938970c006acfc' => 
    array (
      0 => '/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/modules/feeder/feederHeader.tpl',
      1 => 1387287244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206190770452e63fa70cd565-11527905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e63fa727c0e4_60961805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e63fa727c0e4_60961805')) {function content_52e63fa727c0e4_60961805($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>