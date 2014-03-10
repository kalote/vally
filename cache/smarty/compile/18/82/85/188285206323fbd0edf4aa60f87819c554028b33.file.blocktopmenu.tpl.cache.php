<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:33:59
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74907109752b064567bab33-98020450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '188285206323fbd0edf4aa60f87819c554028b33' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74907109752b064567bab33-98020450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b06456808d63_52775953',
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06456808d63_52775953')) {function content_52b06456808d63_52775953($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
<div id="menu-wrap">  
	<ul id="menu-custom">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
				<li class="search">
					<form id="searchbox" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" method="get">
								<input type="hidden" name="controller" value="search" />
						<input type="hidden" value="position" name="orderby"/>
						<input type="hidden" value="desc" name="orderway"/>
						<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" placeholder="Search..." />
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
<?php }?><?php }} ?>