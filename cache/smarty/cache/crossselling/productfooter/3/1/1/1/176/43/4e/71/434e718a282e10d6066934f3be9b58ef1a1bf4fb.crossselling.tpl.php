<?php /*%%SmartyHeaderCode:193579702652b06f05761739-57046164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '434e718a282e10d6066934f3be9b58ef1a1bf4fb' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/crossselling/crossselling.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193579702652b06f05761739-57046164',
  'variables' => 
  array (
    'orderProducts' => 0,
    'orderProduct' => 0,
    'link' => 0,
    'crossDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b06f05824fe1_65792566',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06f05824fe1_65792566')) {function content_52b06f05824fe1_65792566($_smarty_tpl) {?><script type="text/javascript">
	$("#carouselproductcross").carouFredSel({
		debug: true,
		circular: true,
        infinite: true,
		responsive: true,
		align   : "center",
		width: '100%',
	    auto	: {
    		play	: 1,
	    	timeoutDuration :20000
	    },
		
	    items	: {
					
		visible: {
					min: 2,
					max: 6
					 },
					 width:167,
		
		},		
		scroll	: {
			items	: 1,
			pauseOnHover:false
		},
		prev	: {
			button	: "#cross_prev"
		},
		next	: {
			button	: "#cross_next"
		},
		swipe: {
					onMouse: true,
					onTouch: true
			   }
	});
</script><?php }} ?>