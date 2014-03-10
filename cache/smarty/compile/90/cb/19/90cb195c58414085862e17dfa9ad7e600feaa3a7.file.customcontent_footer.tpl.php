<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:34:03
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/modules/customcontent/views/templates/hook/customcontent_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117341985152b06eeb7a1598-30425536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90cb195c58414085862e17dfa9ad7e600feaa3a7' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/modules/customcontent/views/templates/hook/customcontent_footer.tpl',
      1 => 1387293988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117341985152b06eeb7a1598-30425536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'itemPos' => 0,
    'FooterHook' => 0,
    'item' => 0,
    'img_path' => 0,
    'html_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b06eeb8d33b8_03510487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06eeb8d33b8_03510487')) {function content_52b06eeb8d33b8_03510487($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['itemPos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemPos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemPos']->key => $_smarty_tpl->tpl_vars['itemPos']->value){
$_smarty_tpl->tpl_vars['itemPos']->_loop = true;
?>
  <?php if ($_smarty_tpl->tpl_vars['itemPos']->value->hook=='footer'){?><?php $_smarty_tpl->tpl_vars['FooterHook'] = new Smarty_variable('true', null, 0);?><?php }?>
<?php } ?>
<?php if (isset($_smarty_tpl->tpl_vars['FooterHook']->value)&&$_smarty_tpl->tpl_vars['FooterHook']->value=='true'){?>
</div>
</div>
<div id="customcontent_footer">
  <ul class="customcontent-footer">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['item']->value->hook=='footer'){?>
      <li>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->img&&$_smarty_tpl->tpl_vars['item']->value->url){?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value->img;?>
" alt=""/>
          </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->img&&!$_smarty_tpl->tpl_vars['item']->value->url){?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value->img;?>
" alt=""/>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->html->{$_smarty_tpl->tpl_vars['html_lang']->value}){?>    
        <div class="item_html">
          <?php echo $_smarty_tpl->tpl_vars['item']->value->html->{$_smarty_tpl->tpl_vars['html_lang']->value};?>

        </div>
        <?php }?>
      </li>
      <?php }?>
    <?php } ?>
  </ul>
</div>
<div>
<div>
<?php }?><?php }} ?>