<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 22:30:33
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/loyalty/shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158967088352b0984a007a90-11937153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41de1173c9688874e162d3fb337d8f2818475fa4' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/loyalty/shopping-cart.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158967088352b0984a007a90-11937153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_dir' => 0,
    'points' => 0,
    'voucher' => 0,
    'guest_checkout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b0984a07f839_06021019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0984a07f839_06021019')) {function content_52b0984a07f839_06021019($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<p id="loyalty">
	<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/loyalty.png" alt="<?php echo smartyTranslate(array('s'=>'loyalty','mod'=>'loyalty'),$_smarty_tpl);?>
" class="icon" />
	<?php if ($_smarty_tpl->tpl_vars['points']->value>0){?>
		<?php echo smartyTranslate(array('s'=>'By checking out this shopping cart you can collect up to','mod'=>'loyalty'),$_smarty_tpl);?>
 <b>
		<?php if ($_smarty_tpl->tpl_vars['points']->value>1){?><?php echo smartyTranslate(array('s'=>'%d loyalty points','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'%d loyalty point','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?></b>
		<?php echo smartyTranslate(array('s'=>'that can be converted into a voucher of','mod'=>'loyalty'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['voucher']->value),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['guest_checkout']->value)&&$_smarty_tpl->tpl_vars['guest_checkout']->value){?><sup>*</sup><?php }?>.<br />
		<?php if (isset($_smarty_tpl->tpl_vars['guest_checkout']->value)&&$_smarty_tpl->tpl_vars['guest_checkout']->value){?><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Not available for Instant checkout order','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?>
	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'Add some products to your shopping cart to collect some loyalty points.','mod'=>'loyalty'),$_smarty_tpl);?>

	<?php }?>
</p>
<!-- END : MODULE Loyalty --><?php }} ?>