<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:33:59
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blocktags/blocktags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65620984852b0645709c899-06425172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79002c7ecc8a3f80ca13779580a9139a6fd2faca' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blocktags/blocktags.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65620984852b0645709c899-06425172',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b064571653c9_01746173',
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b064571653c9_01746173')) {function content_52b064571653c9_01746173($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Block tags module -->
<section id="tags_block_left" class="block tags_block column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Tags','mod'=>'blocktags'),$_smarty_tpl);?>
</span><span class="column_icon_toggle"></span></h4>
        <p class="block_content toggle_content">
            <?php if ($_smarty_tpl->tpl_vars['tags']->value){?>
                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
 $_smarty_tpl->tpl_vars['tag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->index++;
 $_smarty_tpl->tpl_vars['tag']->first = $_smarty_tpl->tpl_vars['tag']->index === 0;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['tag']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
                    <a href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['tag']->value['name']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,"tag=".$_tmp1);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blocktags'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tag']->value['name'], 'html', 'UTF-8');?>
" class="<?php echo $_smarty_tpl->tpl_vars['tag']->value['class'];?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }else{ ?>item<?php }?>"><i class="icon-tags"></i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tag']->value['name'], 'html', 'UTF-8');?>
</a>
                <?php } ?>
            <?php }else{ ?>
                <?php echo smartyTranslate(array('s'=>'No tags specified yet','mod'=>'blocktags'),$_smarty_tpl);?>

            <?php }?>
        </p>
</section>
<!-- /Block tags module -->
<?php }} ?>