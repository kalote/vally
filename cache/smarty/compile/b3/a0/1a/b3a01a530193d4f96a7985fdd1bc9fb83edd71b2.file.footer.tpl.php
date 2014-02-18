<?php /* Smarty version Smarty-3.1.14, created on 2014-01-27 15:14:54
         compiled from "/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3140005052e63fae4b9926-03683762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3a01a530193d4f96a7985fdd1bc9fb83edd71b2' => 
    array (
      0 => '/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/footer.tpl',
      1 => 1387293973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3140005052e63fae4b9926-03683762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e63fae4e9019_91480656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e63fae4e9019_91480656')) {function content_52e63fae4e9019_91480656($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
<aside id="right_column"  class="span3 column right_home">   
              <?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</aside>
</div>
	</div>
    	</div>
<div class="footer-bg-mob">
    <footer class="container ">
       <div class="row modules">
           <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

      </div>
    </footer> 
</div>          
	</div>
		</div>
			</div>
  <?php }?>
</body>
</html>
<?php }} ?>