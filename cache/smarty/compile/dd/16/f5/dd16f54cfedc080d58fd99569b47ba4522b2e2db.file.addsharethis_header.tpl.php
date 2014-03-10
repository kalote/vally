<?php /* Smarty version Smarty-3.1.14, created on 2014-01-27 15:14:47
         compiled from "/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/modules/addsharethis/addsharethis_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44390160052e63fa75056e9-01322078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd16f54cfedc080d58fd99569b47ba4522b2e2db' => 
    array (
      0 => '/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/modules/addsharethis/addsharethis_header.tpl',
      1 => 1387293994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44390160052e63fa75056e9-01322078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e63fa7520291_17132387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e63fa7520291_17132387')) {function content_52e63fa7520291_17132387($_smarty_tpl) {?><meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large');?>
" />

<?php }} ?>