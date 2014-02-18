<?php /*%%SmartyHeaderCode:143212165652b06f055495b1-40567859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1174943c71eaf01f3c64a66afd8a2ab61d4bb868' => 
    array (
      0 => '/nfs/c09/h05/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/productscategory/productscategory.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143212165652b06f055495b1-40567859',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d4318316d623_64979727',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d4318316d623_64979727')) {function content_52d4318316d623_64979727($_smarty_tpl) {?>	<section class="page_product_box blockproductscategory">
		<h3>1 autres produits dans la même catégorie :<span class="icon-toggle"></span></h3>
    	<div id="block-category-slider" class="carusel-inner responsive  toggle_content">
        	<ul id="carouselproduct" class="carousel-ul">
			                <li class="item">
                    <a href="http://amir.johann-bich.com/fr/portables-apple/3-macbook-air.html" class="lnk_img" title="MacBook Air"><img src="http://amir.johann-bich.com/1-medium_default/macbook-air.jpg" alt="MacBook Air" /></a>
                        <a class="product_link" href="http://amir.johann-bich.com/fr/portables-apple/3-macbook-air.html" title="MacBook Air">MacBook Air</a>
                                    </li>
			        	</ul>

            	<a class="prev" id="cat_prev" href="#"></a>
				<a class="next" id="cat_next" href="#"></a>
            </div>
</section>
<script type="text/javascript">
	$("#carouselproduct").carouFredSel({
		debug: true,
		circular: true,
        infinite: true,
		responsive: true,
		align   : "center",
		width: '100%',
	    auto	: {
    		play	: 1,
	    	timeoutDuration :15000
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
			button	: "#cat_prev"
		},
		next	: {
			button	: "#cat_next"
		},
		swipe: {
					onMouse: true,
					onTouch: true
			   }
	}, 
	{
	    classnames		: {
		    selected		: "selected",
		    hidden			: "hidden",
		    disabled		: "disabled",
		    paused			: "paused",
		    stopped			: "stopped"
	    },

	});
	</script>
<?php }} ?>