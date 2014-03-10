<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:33:58
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/modules/addsharethis/addsharethis_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88208522052b06ee63d8876-61332911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abb5726b6da49a714f93e662444291c4a51f53af' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/modules/addsharethis/addsharethis_header.tpl',
      1 => 1387293994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88208522052b06ee63d8876-61332911',
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
  'unifunc' => 'content_52b06ee640f4a1_17366284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06ee640f4a1_17366284')) {function content_52b06ee640f4a1_17366284($_smarty_tpl) {?><meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large');?>
" />

<?php }} ?>