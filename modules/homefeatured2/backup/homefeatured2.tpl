
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

				{foreach from=$products item=product name=homeFeaturedProducts}

				<div class="col-md-4 col-sm-6 col-xs-12">
					<a title="{$product.name|escape:'html':'UTF-8'}" href="{$link->getImageLink($product.link_rewrite, $product.id_image, 'thickbox_default')|escape:'html'}" class="fh5co-project-item image-popup to-animate">
						<div class="fh5co-text text-center">

						<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.name|escape:'html':'UTF-8'}" class="img-responsive">

						<h2>{$product.name|escape:'html':'UTF-8'}</h2>
						</div>
					</a>
				</div>
				<div class="clearfix visible-sm-block"></div>
				{/foreach}


			</div>

		</div>
</section>










	{else}
		<p>{l s='No featured products' mod='homefeatured'}</p>
	{/if}
<!-- /MODULE Home Featured Products -->
