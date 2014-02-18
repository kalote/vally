<?php /*%%SmartyHeaderCode:200076009052f21974e1c1c5-68187620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '090d1abbb9ae5dec4d0dea957136e051c6c46e20' => 
    array (
      0 => '/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/productscategory/productscategory.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200076009052f21974e1c1c5-68187620',
  'variables' => 
  array (
    'categoryProducts' => 0,
    'categoryProduct' => 0,
    'link' => 0,
    'ProdDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f219750250d1_26757278',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f219750250d1_26757278')) {function content_52f219750250d1_26757278($_smarty_tpl) {?>	<section class="page_product_box blockproductscategory">
		<h3>2 autres produits dans la même catégorie :<span class="icon-toggle"></span></h3>
    	<div id="block-category-slider" class="carusel-inner responsive  toggle_content">
        	<ul id="carouselproduct" class="carousel-ul">
			                <li class="item">
                    <a href="http://amir.johann-bich.com/fr/musique-ipods/2-ipod-shuffle.html" class="lnk_img" title="iPod shuffle"><img src="http://amir.johann-bich.com/23-medium_default/ipod-shuffle.jpg" alt="iPod shuffle" /></a>
                        <a class="product_link" href="http://amir.johann-bich.com/fr/musique-ipods/2-ipod-shuffle.html" title="iPod shuffle">iPod shuffle</a>
                                    </li>
			                <li class="item">
                    <a href="http://amir.johann-bich.com/fr/musique-ipods/5-ipod-touch.html" class="lnk_img" title="iPod touch"><img src="http://amir.johann-bich.com/7-medium_default/ipod-touch.jpg" alt="iPod touch" /></a>
                        <a class="product_link" href="http://amir.johann-bich.com/fr/musique-ipods/5-ipod-touch.html" title="iPod touch">iPod touch</a>
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