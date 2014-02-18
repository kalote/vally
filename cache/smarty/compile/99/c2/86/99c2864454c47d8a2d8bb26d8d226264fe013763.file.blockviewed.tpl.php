<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:33:59
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blockviewed/blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183320909752b069bdc0ec18-14548829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99c2864454c47d8a2d8bb26d8d226264fe013763' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blockviewed/blockviewed.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183320909752b069bdc0ec18-14548829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b069bdcffbb2_24235423',
  'variables' => 
  array (
    'productsViewedObj' => 0,
    'viewedProduct' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b069bdcffbb2_24235423')) {function content_52b069bdcffbb2_24235423($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Block Viewed products -->
<section id="viewed-products_block_left" class="block products_block column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="products ">
			<?php  $_smarty_tpl->tpl_vars['viewedProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['viewedProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsViewedObj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['viewedProduct']->key => $_smarty_tpl->tpl_vars['viewedProduct']->value){
$_smarty_tpl->tpl_vars['viewedProduct']->_loop = true;
?>
				<li class="shop_box  clearfix">
					<a class="products_block_img bordercolor" href="<?php echo $_smarty_tpl->tpl_vars['viewedProduct']->value->product_link;?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockviewed'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['viewedProduct']->value->name, 'html', 'UTF-8');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->cover,'small_default');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['viewedProduct']->value->legend, 'html', 'UTF-8');?>
" /></a>
					<div>
	<h5><a class="product_link" href="<?php echo $_smarty_tpl->tpl_vars['viewedProduct']->value->product_link;?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockviewed'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['viewedProduct']->value->name, 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['viewedProduct']->value->name,25,'...'), 'html', 'UTF-8');?>
</a></h5>
	<p class="product_descr"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['viewedProduct']->value->description_short),75);?>
</p>
     </div> 
				</li>
			<?php } ?>
		</ul>
	</div>
</section>
<?php }} ?>