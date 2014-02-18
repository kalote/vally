<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:34:04
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72100044652b0645a6acb91-51007598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '577c2913c66241a3f7a4933d3831208eb0eb465d' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/footer.tpl',
      1 => 1387293973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72100044652b0645a6acb91-51007598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b0645a6ef731_01550431',
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0645a6ef731_01550431')) {function content_52b0645a6ef731_01550431($_smarty_tpl) {?>

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