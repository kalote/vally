<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:33:58
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blockcurrencies/blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73845270952b0645601eaf9-21315422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb76801ff0f12869293340533f1574286d4a9276' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blockcurrencies/blockcurrencies.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73845270952b0645601eaf9-21315422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b0645608c473_00243684',
  'variables' => 
  array (
    'request_uri' => 0,
    'blockcurrencies_sign' => 0,
    'currencies' => 0,
    'cookie' => 0,
    'f_currency' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0645608c473_00243684')) {function content_52b0645608c473_00243684($_smarty_tpl) {?>

<!-- Block currencies module -->
<section id="currencies_block_top" class="header-box">
<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
		
		<p  class="inner-carrencies">
        <input type="hidden" name="id_currency" id="id_currency" value=""/>
		<input type="hidden" name="SubmitCurrency" value="" />
        <?php echo $_smarty_tpl->tpl_vars['blockcurrencies_sign']->value;?>
<span class="arrow_header_top"></span>    
		</p>
		<ul id="first-currencies" class="currencies_ul list_header">
			<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value){
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
				<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']){?>class="selected"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']){?>
                            <span><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>
</span><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>

                <?php }else{ ?>
					<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" title="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>
</span><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
</a>
                    
        
                    
                    			
                    <?php }?>
				</li>
			<?php } ?>
		</ul>
	</form>
</section>
<!-- /Block currencies module --><?php }} ?>