<?php /*%%SmartyHeaderCode:119360821152e63fa7da6ab3-75365393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b3160738d67301d7da6b126df5c2a283db81687' => 
    array (
      0 => '/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blocksearch/blocksearch-top.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
    '3818c860fe5727670df7aeeee3b532cd677d8755' => 
    array (
      0 => '/nfs/c09/h01/mnt/137124/domains/amir.johann-bich.com/html/themes/theme593/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1387293971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119360821152e63fa7da6ab3-75365393',
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e63fa7ef5b29_57105817',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e63fa7ef5b29_57105817')) {function content_52e63fa7ef5b29_57105817($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<section id="search_block_top" class="header-box">
	<form method="get" action="http://amir.johann-bich.com/fr/recherche" id="searchbox">
		<p>
			<label for="search_query_top">Rechercher</label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
            <a href="javascript:document.getElementById('searchbox').submit();"></a>
			
	    </p>
	</form>
</section>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://amir.johann-bich.com/fr/recherche', {
						minChars: 3,
						max: 10,
						width: 300,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
							parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
						})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>