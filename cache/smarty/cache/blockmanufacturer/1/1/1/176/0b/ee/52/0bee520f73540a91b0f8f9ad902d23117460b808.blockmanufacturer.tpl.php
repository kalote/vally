<?php /*%%SmartyHeaderCode:130582395252b06457708b13-70775512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bee520f73540a91b0f8f9ad902d23117460b808' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130582395252b06457708b13-70775512',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b06ee8899606_52273556',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06ee8899606_52273556')) {function content_52b06ee8899606_52273556($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<section id="manufacturers_block_left" class="block blockmanufacturer column_box">
	<h4 class="title_block"><span>Fabricants</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="first_item"><a href="http://amir.johann-bich.com/fr/1_apple-computer-inc" title="En savoir plus sur Apple Computer, Inc"><i class="icon-ok"></i>Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://amir.johann-bich.com/fr/2_shure-incorporated" title="En savoir plus sur Shure Incorporated"><i class="icon-ok"></i>Shure Incorporated</a></li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Tous les fabricants</option>
									<option value="http://amir.johann-bich.com/fr/1_apple-computer-inc">Apple Computer, Inc</option>
									<option value="http://amir.johann-bich.com/fr/2_shure-incorporated">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</section>
<!-- /Block manufacturers module -->
<?php }} ?>