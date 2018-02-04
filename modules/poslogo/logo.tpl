<div class="pos-logo">
	<div class="title_block">
		<h3>{l s='Brands' mod='poslogo'}</h3>
	</div>
	<div class="pos-content-logo">
		<div class="pos-logo-slide">
			{foreach from=$logos item=logo name=posLogo}
				{if $logo.title =='brand'}
				<div class="item">

				    <a href ="{$logo.link}">
						<img class="img-responsive" src ="{$logo.image}" alt ="{l s='Logo' mod='poslogo'}" />
				    </a>
				</div>
				{/if}
			{/foreach}
		</div>
		<a class="nexttab">&rarr;</a>
	</div>
</div>

<br />

<div class="pos-logo2">
	<div class="title_block">
		<h3>{l s='Customers' mod='poslogo'}</h3>
	</div>
	<div class="pos-content-logo">
		<div class="pos-logo-slide-2">
			{foreach from=$logos item=logo name=posLogo}
			{if $logo.title =='customer'}
				<div class="item">
				    <a href ="{$logo.link}">
						<img class="img-responsive" src ="{$logo.image}" alt ="{l s='Logo' mod='poslogo'}" />
				    </a>
				</div>
			{/if}
			{/foreach}
		</div>
		<a class="nexttab2">&rarr;</a>
	</div>
</div>

<br />

<div class="pos-logo3">
	<div class="title_block">
		<h3>{l s='Retailers' mod='poslogo'}</h3>
	</div>
	<div class="pos-content-logo">
		<div class="pos-logo-slide-3">
			{foreach from=$logos item=logo name=posLogo}
			{if $logo.title =='retailer'}
				<div class="item">
				    <a href ="{$logo.link}">
						<img class="img-responsive" src ="{$logo.image}" alt ="{l s='Logo' mod='poslogo'}" />
				    </a>
				</div>
			{/if}
			{/foreach}
		</div>
		<a class="nexttab3">&rarr;</a>
	</div>
</div>



<script type="text/javascript"> 
    $(document).ready(function() {
		var logo = $(".pos-logo-slide");
		logo.owlCarousel({
		items :{$slideOptions.min_item},
		itemsDesktop : [1024,4],
		itemsDesktopSmall : [900,3], 
		itemsTablet: [600,2], 
		itemsMobile : [480,1]
		});
		 
		// Custom Navigation Events
		$(".pos-logo .nexttab").click(function(){
		logo.trigger('owl.next');
		})
		$(".pos-logo .prevtab").click(function(){
		logo.trigger('owl.prev');
		})     

		var logo2 = $(".pos-logo-slide-2");
		logo2.owlCarousel({
		items :{$slideOptions.min_item},
		itemsDesktop : [1024,4],
		itemsDesktopSmall : [900,3], 
		itemsTablet: [600,2], 
		itemsMobile : [480,1]
		});
		 
		// Custom Navigation Events
		$(".pos-logo2 .nexttab2").click(function(){
		logo2.trigger('owl.next');
		})
		$(".pos-logo2 .prevtab2").click(function(){
		logo2.trigger('owl.prev');
		})     

		var logo3 = $(".pos-logo-slide-3");
		logo3.owlCarousel({
		items :{$slideOptions.min_item},
		itemsDesktop : [1024,4],
		itemsDesktopSmall : [900,3], 
		itemsTablet: [600,2], 
		itemsMobile : [480,1]
		});
		 
		// Custom Navigation Events
		$(".pos-logo3 .nexttab3").click(function(){
		logo3.trigger('owl.next');
		})
		$(".pos-logo3 .prevtab3").click(function(){
		logo3.trigger('owl.prev');
		})     
    });
</script>