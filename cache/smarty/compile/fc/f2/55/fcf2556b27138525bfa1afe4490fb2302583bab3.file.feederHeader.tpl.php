<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:33:58
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142137551452b06ee6192715-06927273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf2556b27138525bfa1afe4490fb2302583bab3' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/modules/feeder/feederHeader.tpl',
      1 => 1387287244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142137551452b06ee6192715-06927273',
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
  'unifunc' => 'content_52b06ee6279fb8_37408538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06ee6279fb8_37408538')) {function content_52b06ee6279fb8_37408538($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>