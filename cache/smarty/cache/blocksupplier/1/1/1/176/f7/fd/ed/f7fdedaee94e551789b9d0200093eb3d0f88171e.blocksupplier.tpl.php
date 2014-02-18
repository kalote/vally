<?php /*%%SmartyHeaderCode:58133698452b06457462269-55982293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7fdedaee94e551789b9d0200093eb3d0f88171e' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blocksupplier/blocksupplier.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58133698452b06457462269-55982293',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b06ee8a8b711_70689384',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'link' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06ee8a8b711_70689384')) {function content_52b06ee8a8b711_70689384($_smarty_tpl) {?>
<!-- Block suppliers module -->
<section id="suppliers_block_left" class="block blocksupplier column_box">
	<h4 class="title_block"><span>Fournisseurs</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="first_item">
			<a href="http://amir.johann-bich.com/fr/1__applestore" title="En savoir plus sur AppleStore"><i class="icon-ok"></i>AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://amir.johann-bich.com/fr/2__shure-online-store" title="En savoir plus sur Shure Online Store"><i class="icon-ok"></i>Shure Online Store</a>
		</li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Tous les fournisseurs</option>
									<option value="http://amir.johann-bich.com/fr/1__applestore">AppleStore</option>
									<option value="http://amir.johann-bich.com/fr/2__shure-online-store">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</section>
<!-- /Block suppliers module -->
<?php }} ?>