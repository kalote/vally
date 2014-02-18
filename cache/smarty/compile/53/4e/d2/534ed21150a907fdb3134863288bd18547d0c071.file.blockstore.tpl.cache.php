<?php /* Smarty version Smarty-3.1.14, created on 2014-01-27 15:14:50
         compiled from "/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179554221552e63faaa2a362-92459186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '534ed21150a907fdb3134863288bd18547d0c071' => 
    array (
      0 => '/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blockstore/blockstore.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179554221552e63faaa2a362-92459186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e63faaa5bbf2_59340351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e63faaa5bbf2_59340351')) {function content_52e63faaa5bbf2_59340351($_smarty_tpl) {?>

<section id="stores_block_left" class="block  column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content blockstore toggle_content">
		<p class="store_image"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store_img']->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"  /></a></p>
		<p>
			<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Discover our store(s)d!','mod'=>'blockstore'),$_smarty_tpl);?>
</a>
		</p>
	</div>
</section>
<!-- /Block stores module -->
<?php }} ?>