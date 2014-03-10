<?php /* Smarty version Smarty-3.1.14, created on 2014-02-05 14:59:01
         compiled from "/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117924648352f219758c4a93-04948954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43c01fef0300a666655361117f255239163bebb3' => 
    array (
      0 => '/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blocksharefb/blocksharefb.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117924648352f219758c4a93-04948954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f219758eb186_15843225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f219758eb186_15843225')) {function content_52f219758eb186_15843225($_smarty_tpl) {?>
<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><i class="icon-facebook-sign"></i><?php echo smartyTranslate(array('s'=>'Share on Facebook','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>