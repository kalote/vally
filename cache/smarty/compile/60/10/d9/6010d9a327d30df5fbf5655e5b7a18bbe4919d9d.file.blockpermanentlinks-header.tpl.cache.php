<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 19:33:58
         compiled from "/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119567557552b064560daa83-51936472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6010d9a327d30df5fbf5655e5b7a18bbe4919d9d' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119567557552b064560daa83-51936472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b0645619aa33_62766400',
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0645619aa33_62766400')) {function content_52b0645619aa33_62766400($_smarty_tpl) {?>

<!-- Block permanent links module HEADER -->
<section class="header-box blockpermanentlinks-header">
    <ul id="header_links">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
" class="header_links_home"><?php echo smartyTranslate(array('s'=>'home','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
        <li><a  href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" class="header_links_store"><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('4','About Us');?>
" class="header_links_about"><?php echo smartyTranslate(array('s'=>'About Us'),$_smarty_tpl);?>
</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('1','Delivery');?>
" class="header_links_delivery"><?php echo smartyTranslate(array('s'=>'Delivery'),$_smarty_tpl);?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" class="header_links_contact"  title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>

        
    </ul>

    <div class="mobile-link-top">
        <h4>
             <span class="title-hed"></span><span class="arrow_header_top_menu"></span>
        </h4>
        <ul id="mobilelink" class="list_header">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
" class="header_links_home"><?php echo smartyTranslate(array('s'=>'home','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
        <li><a  href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" class="header_links_store"><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
</a></li>
               <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('4','About Us');?>
" class="header_links_about"><?php echo smartyTranslate(array('s'=>'About Us'),$_smarty_tpl);?>
</a></li>
    	    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('1','Delivery');?>
" class="header_links_delivery">Delivery</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" class="header_links_contact"  title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>

        </ul>
    </div>
</section>
<!-- /Block permanent links module HEADER -->


<?php }} ?>