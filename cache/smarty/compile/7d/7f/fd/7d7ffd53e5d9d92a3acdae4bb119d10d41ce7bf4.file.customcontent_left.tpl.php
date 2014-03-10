<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:34:01
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/modules/customcontent2/views/templates/hook/customcontent_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42778012452b06ee9135b77-68537951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d7ffd53e5d9d92a3acdae4bb119d10d41ce7bf4' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/modules/customcontent2/views/templates/hook/customcontent_left.tpl',
      1 => 1387293989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42778012452b06ee9135b77-68537951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'itemPos' => 0,
    'LeftHook' => 0,
    'item' => 0,
    'img_path' => 0,
    'html_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b06ee91b2e83_17269663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06ee91b2e83_17269663')) {function content_52b06ee91b2e83_17269663($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['itemPos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemPos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemPos']->key => $_smarty_tpl->tpl_vars['itemPos']->value){
$_smarty_tpl->tpl_vars['itemPos']->_loop = true;
?>
  <?php if ($_smarty_tpl->tpl_vars['itemPos']->value->hook=='left'){?><?php $_smarty_tpl->tpl_vars['LeftHook'] = new Smarty_variable('true', null, 0);?><?php }?>
<?php } ?>
<?php if (isset($_smarty_tpl->tpl_vars['LeftHook']->value)&&$_smarty_tpl->tpl_vars['LeftHook']->value=='true'){?>
<div id="customcontent_left">
  <ul class="customcontent-left">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['item']->value->hook=='left'){?>
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
<?php }?><?php }} ?>