<?php /* Smarty version Smarty-3.1.14, created on 2014-02-05 14:59:01
         compiled from "/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/loyalty/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121288927552f21975b3cb96-31596362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91574bf2992957960af95da87a6ced305b62cd6b' => 
    array (
      0 => '/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/loyalty/product.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121288927552f21975b3cb96-31596362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'point_rate' => 0,
    'point_value' => 0,
    'points_in_cart' => 0,
    'none_award' => 0,
    'points' => 0,
    'total_points' => 0,
    'voucher' => 0,
    'no_pts_discounted' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f21975c06590_61369326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f21975c06590_61369326')) {function content_52f21975c06590_61369326($_smarty_tpl) {?>
<script type="text/javascript">
var point_rate = <?php echo $_smarty_tpl->tpl_vars['point_rate']->value;?>
;
var point_value = <?php echo $_smarty_tpl->tpl_vars['point_value']->value;?>
;
var points_in_cart = <?php echo $_smarty_tpl->tpl_vars['points_in_cart']->value;?>
;
var none_award = <?php echo $_smarty_tpl->tpl_vars['none_award']->value;?>
;

$(document).ready(function() {
	// Force color "button" to fire event change
	$('#color_to_pick_list').click(function() {
		$('#color_pick_hidden').triggerHandler('change');
	});

	// Catch all attribute changeent of the product
	$('.product_attributes input, .product_attributes select').change(function() {
		if (typeof(productPrice) == 'undefined' || typeof(productPriceWithoutReduction) == 'undefined')
			return;
		
		var points = Math.round(productPrice / point_rate);
		var total_points = points_in_cart + points;
		var voucher = total_points * point_value;
		if (!none_award && productPriceWithoutReduction != productPrice) {
			$('#loyalty').html("<?php echo smartyTranslate(array('s'=>'No reward points for this product because there\'s already a discount.','mod'=>'loyalty'),$_smarty_tpl);?>
");
		} else if (!points) {
			$('#loyalty').html("<?php echo smartyTranslate(array('s'=>'No reward points for this product.','mod'=>'loyalty'),$_smarty_tpl);?>
");
		} else {
			var content = "<?php echo smartyTranslate(array('s'=>'By buying this product you can collect up to','mod'=>'loyalty'),$_smarty_tpl);?>
 <b><span id=\"loyalty_points\">"+points+'</span> ';
			if (points > 1)
				content += "<?php echo smartyTranslate(array('s'=>'loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</b>. ";
			else
				content += "<?php echo smartyTranslate(array('s'=>'loyalty point','mod'=>'loyalty'),$_smarty_tpl);?>
</b>. ";
			
			content += "<?php echo smartyTranslate(array('s'=>'Your cart will total','mod'=>'loyalty'),$_smarty_tpl);?>
 <b><span id=\"total_loyalty_points\">"+total_points+'</span> ';
			if (total_points > 1)
				content += "<?php echo smartyTranslate(array('s'=>'points','mod'=>'loyalty'),$_smarty_tpl);?>
";
			else
				content += "<?php echo smartyTranslate(array('s'=>'point','mod'=>'loyalty'),$_smarty_tpl);?>
";
			
			content += "</b> <?php echo smartyTranslate(array('s'=>'that can be converted into a voucher of','mod'=>'loyalty'),$_smarty_tpl);?>
 ";
			content += '<span id="loyalty_price">'+formatCurrency(voucher, currencyFormat, currencySign, currencyBlank)+'</span>.';
			$('#loyalty').html(content);
		}
	});
});
</script>
	<p id="loyalty" ><i class="icon-info-sign"></i>
    <em>
<?php if ($_smarty_tpl->tpl_vars['points']->value){?>
		<?php echo smartyTranslate(array('s'=>'By buying this product you can collect up to','mod'=>'loyalty'),$_smarty_tpl);?>
 <b><span id="loyalty_points"><?php echo $_smarty_tpl->tpl_vars['points']->value;?>
</span> 
		<?php if ($_smarty_tpl->tpl_vars['points']->value>1){?><?php echo smartyTranslate(array('s'=>'loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'loyalty point','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?></b>. 
		<?php echo smartyTranslate(array('s'=>'Your cart will total','mod'=>'loyalty'),$_smarty_tpl);?>
 <b><span id="total_loyalty_points"><?php echo $_smarty_tpl->tpl_vars['total_points']->value;?>
</span> 
		<?php if ($_smarty_tpl->tpl_vars['total_points']->value>1){?><?php echo smartyTranslate(array('s'=>'points','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'point','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?></b> <?php echo smartyTranslate(array('s'=>'that can be converted into a voucher of','mod'=>'loyalty'),$_smarty_tpl);?>
 
		<span id="loyalty_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['voucher']->value),$_smarty_tpl);?>
</span>.
	<?php }else{ ?>
		<?php if (isset($_smarty_tpl->tpl_vars['no_pts_discounted']->value)&&$_smarty_tpl->tpl_vars['no_pts_discounted']->value==1){?>
			<?php echo smartyTranslate(array('s'=>'No reward points for this product because there\'s already a discount.','mod'=>'loyalty'),$_smarty_tpl);?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'No reward points for this product.','mod'=>'loyalty'),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
    </em>
</p>
<?php }} ?>