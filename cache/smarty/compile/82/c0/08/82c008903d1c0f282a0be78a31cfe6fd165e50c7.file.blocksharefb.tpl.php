<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:34:29
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208555581352b068d2e0d328-72340099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82c008903d1c0f282a0be78a31cfe6fd165e50c7' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blocksharefb/blocksharefb.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208555581352b068d2e0d328-72340099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b068d2ecc000_12470933',
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b068d2ecc000_12470933')) {function content_52b068d2ecc000_12470933($_smarty_tpl) {?>
<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><i class="icon-facebook-sign"></i><?php echo smartyTranslate(array('s'=>'Share on Facebook','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>