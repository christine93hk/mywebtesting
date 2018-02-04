

<link rel="stylesheet" type="text/css" href="/themes/default-asiapack/css/plugin/jquery.fancybox.css">
<!-- MODULE Home Featured Products -->
	{if isset($products) AND $products}
<section id="fh5co-work" data-section="work">
		<div id="homefeatured2" class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<br/><br/><br/>
					<h2 class="to-animate">Gallery</h2>
				</div>

			</div>
			
			<div class="row row-bottom-padded-sm">
			{assign var='productCnt' value=1}
				{foreach from=$products item=product name=homeFeaturedProducts}
				{assign var='productImgs' value=Product::getProductImages(intval($product['id_product']))}	
				
				<div class="col-md-4 col-sm-6 col-xs-12">
					{foreach from=$productImgs item=productImg name=productImgs}
					
						
						{if $product.id_image == $productImg}
							<div class="fh5co-text text-center">
								<a href="{$link->getImageLink($product.link_rewrite, $productImg, 'thickbox_default')|escape:'html'}" title="{$product.name|escape:'html':'UTF-8'}" class="fh5co-project-item to-animate fancybox" rel="gallery{$productCnt}" >
								<span class="number">{$smarty.foreach.myLoop.iteration}</span>
								
								<img src="{$link->getImageLink($product.link_rewrite, $productImg, 'home_default')|escape:'html'}" alt="{$product.name|escape:'html':'UTF-8'}" class="img-responsive" width="188" height="118"></img>
								<h2>{$product.name|escape:'html':'UTF-8'}</h2>	
								</a>
							</div>
						{else}

							<a href="{$link->getImageLink($product.link_rewrite, $productImg, 'thickbox_default')|escape:'html'}" title="{$product.name|escape:'html':'UTF-8'}" class="fancybox hidden" rel="gallery{$productCnt}">
								<span class="number">{$smarty.foreach.myLoop.iteration}</span>
								<img src="{$link->getImageLink($product.link_rewrite, $productImg, 'home_default')|escape:'html'}" alt="{$product.name|escape:'html':'UTF-8'}" class="img-responsive" width="188" height="118" />
								<h2>{$product.name|escape:'html':'UTF-8'}</h2>
							</a>
								

						
						{/if}
						
					{/foreach}
				</div>
				{assign var='productCnt' value=$productCnt+1}
				{/foreach}
			</div>		
				

			<div class="clearfix visible-sm-block">
			</div>

		</div>
</section>









	{else}
		<p>{l s='No featured products' mod='homefeatured'}</p>
	{/if}
<!-- /MODULE Home Featured Products -->

{literal}
<script type="text/javascript">
$(document).ready(function(){
	//var productCnt
	var pc = "{/literal}{$productCnt}{literal}"; 
    // fancybox
	for (i=1; i < pc + 1 ; i++){
    $("a[rel=gallery"+i+"]").attr('data-fancybox-group', 'gallery').fancybox({
        // add buttons helper (requires buttons helper js and css files)
        helpers: {
            buttons: {}
        } 
    });
	

	}
}); // ready

</script>
{/literal}
