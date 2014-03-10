<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:34:02
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/modules/customcontent/views/templates/hook/customcontent_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181619227552b06eeaa6a2a2-34711102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a00de0bd09a47d83e79428d9ccbc09e34837344' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/modules/customcontent/views/templates/hook/customcontent_home.tpl',
      1 => 1387293988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181619227552b06eeaa6a2a2-34711102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'itemPos' => 0,
    'HomeHook' => 0,
    'item' => 0,
    'img_path' => 0,
    'html_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b06eeac55712_73506512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06eeac55712_73506512')) {function content_52b06eeac55712_73506512($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['itemPos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemPos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['itemPos']->key => $_smarty_tpl->tpl_vars['itemPos']->value){
$_smarty_tpl->tpl_vars['itemPos']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>
  <?php if ($_smarty_tpl->tpl_vars['itemPos']->value->hook=='home'){?><?php $_smarty_tpl->tpl_vars['HomeHook'] = new Smarty_variable('true', null, 0);?><?php }?>
<?php } ?>
<?php if (isset($_smarty_tpl->tpl_vars['HomeHook']->value)&&$_smarty_tpl->tpl_vars['HomeHook']->value=='true'){?>
<div id="customcontent_home">
  <ul class="customcontent-home">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>
      <?php if ($_smarty_tpl->tpl_vars['item']->value->hook=='home'){?>
      <li class="num-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'];?>
">
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
           <a class="item_html " href="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
          <?php echo $_smarty_tpl->tpl_vars['item']->value->html->{$_smarty_tpl->tpl_vars['html_lang']->value};?>

          </a>
        <?php }?>
      </li>
      <?php }?>
    <?php } ?>
  </ul>
</div>
<?php }?><?php }} ?>