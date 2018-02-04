<?php /* Smarty version Smarty-3.1.19, created on 2018-02-04 04:21:01
         compiled from "/home/asiapack/prestashop-prod/themes/default-asiapack/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21096180165a767c1d1d0573-87150017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f3e4de7c5b7152dbc8e1f1e7dcc686756c826a1' => 
    array (
      0 => '/home/asiapack/prestashop-prod/themes/default-asiapack/index.tpl',
      1 => 1515412274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21096180165a767c1d1d0573-87150017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_dir' => 0,
    'lang_id' => 0,
    'HOOK_HOME_TAB_CONTENT' => 0,
    'content_dir' => 0,
    'request_uri' => 0,
    'confirmation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a767c1d226648_30026580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a767c1d226648_30026580')) {function content_5a767c1d226648_30026580($_smarty_tpl) {?> 
<script type="text/javascript">

            var START_DATE = new Date("January 1, 2018 08:00:00"); // put in the starting date here
            var INTERVAL = 1; // in seconds
            var INCREMENT = 1; // increase per tick
            var START_VALUE = 1; // initial value when it's the start date
            var count = 0;

            window.onload = function() {
                var msInterval = INTERVAL * 1000;
                var now = new Date();
                count = parseInt((now - START_DATE)/msInterval) * INCREMENT + START_VALUE;
                document.getElementById('counter').innerHTML = addCommas(count.toString());
                setInterval(incrCount, msInterval);
            }

            function incrCount() {
                count += INCREMENT;
                document.getElementById('counter').innerHTML = addCommas(count.toString());
            }

            function addCommas(nStr){
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }
            
            
        </script>
        
        <!-- Lead the Way -->
		<script type="text/javascript" src="https://gl.hostcg.com/js/genlead.js">
		    (function(){init_multiplegl('https://gl.hostcg.com/',[['https://gl.hostcg.com/','261','b4mbm4psin']]);})();
		</script>
		<noscript><img src="https://gl.hostcg.com/js/tracker.php?idsite=261&clesite=b4mbm4psin" style="border:0;" alt="" /></noscript>
		<!-- End Lead the Way Code -->


<section id="fh5co-home" data-section="home"
	style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
full_image_2.jpg);"
	data-stellar-background-ratio="0.5">
<div class="gradient"></div>
<div class="container">
	<div class="text-wrap">
		<div class="text-inner">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<!-- 1 -->
					<?php if ($_smarty_tpl->tpl_vars['lang_id']->value==2) {?>
					<div class="thisyear">
						This year, we packed <span id="counter"></span>
						products&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					</div>
					<a href="https://vimeo.com/35242002" class="popup-vimeo"><h1
							class="to-animate">Packaging and Co-Packing in China</h1> </a>
					<div class="row watch-video text-center to-animate">
						<a href="https://vimeo.com/35242002" class="popup-vimeo">
							<h1 class="to-animate">
								<span>Watch the presentation</span>
								<h1>
						
						</a> <a href="https://vimeo.com/35242002"
							class="popup-vimeo btn-video"><i class="icon-play2"></i> </a>
						<?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==1) {?>
						<div class="thisyear">
							Cette année, nous conditionnons le <span id="counter"></span>
							 ème produit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
						</div>
						<a href="https://vimeo.com/64538302" class="popup-vimeo"><h1
								class="to-animate">Packaging and Co-Packing in China</h1> </a>
						<div class="row watch-video text-center to-animate">
							<a href="https://vimeo.com/64538302" class="popup-vimeo">
								<h1 class="to-animate">
									<span>Regarder la présentation</span>
									<h1>
							
							</a> <a href="https://vimeo.com/64538302"
								class="popup-vimeo btn-video"><i class="icon-play2"></i> </a>
							<?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==3) {?>
							<div class="thisyear">
								Wir haben gerade <span id="counter"></span> produkte
								verpackt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
							</div>
							<a href="https://vimeo.com/62842836" class="popup-vimeo"><h1
									class="to-animate">Packaging and Co-Packing in China</h1> </a>
							<div class="row watch-video text-center to-animate">
								<a href="https://vimeo.com/62842836" class="popup-vimeo">
									<h1 class="to-animate">
										<span>Watch the presentation</span>
										<h1>
								
								</a> <a href="https://vimeo.com/62842836"
									class="popup-vimeo btn-video"><i class="icon-play2"></i> </a>
								<?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==5) {?>
								<div class="thisyear">
									Este año ya hemos embalado <span id="counter"></span>
									productos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
								</div>
								<a href="https://vimeo.com/62841124" class="popup-vimeo"><h1
										class="to-animate">Packaging and Co-Packing in China</h1> </a>
								<div class="row watch-video text-center to-animate">
									<a href="https://vimeo.com/62841124" class="popup-vimeo">
										<h1 class="to-animate">
											<span>Watch the presentation</span>
											<h1>
									
									</a> <a href="https://vimeo.com/62841124"
										class="popup-vimeo btn-video"><i class="icon-play2"></i> </a>
									<?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==6) {?>
									<div class="thisyear">
										This year, we packed <span id="counter"></span>
										products&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									</div>
									<a href="https://vimeo.com/226117359" class="popup-vimeo"><h1
											class="to-animate">Packaging and Co-Packing in China</h1> </a>
									<div class="row watch-video text-center to-animate">
										<a href="https://vimeo.com/226117359" class="popup-vimeo">
											<h1 class="to-animate">
												<span>Watch the presentation</span>
												<h1>
										
										</a> <a href="https://vimeo.com/226117359"
											class="popup-vimeo btn-video"><i class="icon-play2"></i> </a>
										<?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==7) {?>
										<!-- Christine Change video-->
										<div class="thisyear">
											This year, we packed <span id="counter"></span>
											products&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
										</div>
										<a href="https://vimeo.com/226117359" class="popup-vimeo"><h1
												class="to-animate">Packaging and Co-Packing in China</h1> </a>
										<div class="row watch-video text-center to-animate">
											<a href="https://vimeo.com/226117359" class="popup-vimeo">
												<h1 class="to-animate">
													<span>Watch the presentation</span>
													<h1>
											
											</a> <a href="https://vimeo.com/226117359"
												class="popup-vimeo btn-video"><i class="icon-play2"></i> </a>
											<?php }?>
											<!-- 1 -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slant"></div>

</section>

<section id="fh5co-intro">
<div class="container">
	<div class="row row-bottom-padded-lg">
		<div class="fh5co-block to-animate"
			style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
pack.jpg);">
			<div class="overlay-darker"></div>
			<div class="overlay"></div>
			<div class="fh5co-text">
				<i class="fh5co-intro-icon icon2-icon-pack"></i>

				<h2>Pack</h2>
				<p>
					We design, print and manufacture your packaging.<br /> We conduct
					final assembling and co-packing.
				</p>


			</div>
		</div>
		<div class="fh5co-block to-animate"
			style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
stock.jpg);">
			<div class="overlay-darker"></div>
			<div class="overlay"></div>
			<div class="fh5co-text">
				<i class="fh5co-intro-icon icon2-icon-stock"></i>

				<h2>Stock</h2>
				<p>We hold stocks of your products and components in our customs
					bonded warehouse until needed.</p>


			</div>
		</div>
		<div class="fh5co-block to-animate"
			style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
carte.jpg);">
			<div class="overlay-darker"></div>
			<div class="overlay"></div>
			<div class="fh5co-text">
				<i class="fh5co-intro-icon icon2-icon-ship"></i>

				<h2>Ship</h2>
				<p>
					Ship your packed product anywhere in the world, under your own
					brand.<br /> <br />
				</p>


			</div>
		</div>
	</div>

</div>
</section>

<section id="fh5co-counters"
	style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
dachan.jpg);"
	data-stellar-background-ratio="0.5">
<div class="fh5co-overlay"></div>
<div class="container">
	<div class="row">
		<div class="col-md-12 section-heading text-center to-animate">
			<h2>Key Figures</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="fh5co-counter to-animate">
				<i class="fh5co-counter-icon icon-industry"></i> <span
					class="fh5co-counter-number">10,000</span> <span
					class="fh5co-counter-label">Sqm factory</span>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="fh5co-counter to-animate">
				<i class="fh5co-counter-icon icon-people"></i> <span
					class="fh5co-counter-number">250</span> <span
					class="fh5co-counter-label">Employees</span>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="fh5co-counter to-animate">
				<i class="fh5co-counter-icon icon-box2"></i> <span
					class="fh5co-counter-number">50</span> <span
					class="fh5co-counter-label">Production lines</span>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="fh5co-counter to-animate">
				<i class="fh5co-counter-icon icon-bar-graph-2"></i> <span
					class="fh5co-counter-number">200,000</span> <span
					class="fh5co-counter-label">Daily capacity units</span>
			</div>
		</div>



	</div>
</div>
</section>

<!--

<script type="text/javascript">
$('.workers').countTo({
  from: 0,
  to: 200000,
  speed: 1500,
  formatter: function (value, options) {
    value = value.toFixed(options.decimals);
    value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
    return value;
  }
});
</script>


-->



<section id="fh5co-serv" data-section="serv">

<div class="container "><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<br />
<br />
<br />

</section>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayHomeTabContent2'),$_smarty_tpl);?>




<section id="fh5co-testimonials" data-section="testimonials">
<div class="container">
	<div class="row">
		<div class="col-md-12 section-heading text-center">
			<br /> <br /> <br />
			<h2 class="to-animate">Clients/Brands</h2>
			<div class="row">

				<div class="brandSlider to-animate">
					<div style="height: 850px; margin-top: -110px;" class="container">
						



						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/1.jpg" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/2.png" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/3.png" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/4.png" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/5.png" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/6.png" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/7.jpg" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/8.png" alt="Logo">
						</div>
						<!-- Hello Kitty -->
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/9.png" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/10.png" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/11.png" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/12.png" alt="Logo">
						</div>

						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/13.png" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/14.png" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/15.png" alt="Logo">
						</div>
						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/16.png" alt="Logo">
						</div>

						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/18.png" alt="Logo">
						</div>

						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/19.png" alt="Logo">
						</div>

						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/20.png" alt="Logo">
						</div>

						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/21.png" alt="Logo">
						</div>

						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/22.png" alt="Logo">
						</div>

						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/23.png" alt="Logo">
						</div>

						<div class="col-sm-2 item item-brand">
							<img class="img-responsive"
								src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/24.png" alt="Logo">
						</div>





					</div>
				</div>
			</div>
			<div class="row">

				<div class="brandSlider to-animate">
					<div class="container">
						<h2 style="margin-bottom: -64px;" class="to-animate">Distributed @</h2>
						<div style="height: 465px; margin-top: -110px;">


							<div class="col-sm-2 item item-brand">
								<img class="img-responsive"
									src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/d1.png" alt="Logo">
							</div>
							<div class="col-sm-2 item item-brand">
								<img class="img-responsive"
									src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/d2.png" alt="Logo">
							</div>

							<div class="col-sm-2 item item-brand">
								<img class="img-responsive"
									src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/d3.png" alt="Logo">
							</div>

							<div class="col-sm-2 item item-brand">
								<img class="img-responsive"
									src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/d4.png" alt="Logo">
							</div>

							<div class="col-sm-2 item item-brand">
								<img class="img-responsive"
									src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/d5.png" alt="Logo">
							</div>

							<div class="col-sm-2 item item-brand">
								<img class="img-responsive"
									src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/d6.png" alt="Logo">
							</div>

							<div class="col-sm-2 item item-brand">
								<img class="img-responsive"
									src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/d7.png" alt="Logo">
							</div>

							<div class="col-sm-2 item item-brand">
								<img class="img-responsive"
									src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/d8.png" alt="Logo">
							</div>

							<div class="col-sm-2 item item-brand">
								<img class="img-responsive"
									src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/d9.png" alt="Logo">
							</div>

							<div class="col-sm-2 item item-brand">
								<img class="img-responsive"
									src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/clients/logo/d10.png" alt="Logo">
							</div>





						</div>


					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Removed by Christine
	<br /> <br /> <br /> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockPosition1"),$_smarty_tpl);?>

	-->
</div>

<div id="fh5co-counters-2"
	style="min-height: 250px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
shenzen.jpg);"
	data-stellar-background-ratio="0.1"></div>

	

</section>

<!-- Changed by christine Row div position -->

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<div class="row">
		<div class="col-md-12 section-heading text-center">
			<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
			

		</div>
</div>		

<section id="fh5co-contact" data-section="contact">

<div class="container">
	<div class="row">
		<div class="col-md-12 section-heading text-center">
			<br /> <br />
			<h2>Contact Us</h2>

		</div>
</div>		



	
	<div class="row row-bottom-padded-md">



		<div class="col-md-4">

			<span class="h2"><i class="small icon-home"></i> Hong Kong</span>
			<p>
				Unit F, 25/F <br>Seabright Plaza <br>9-23 Shell Street <br>North
				Point <br>Hong Kong<br>
			</p>
			<div>
				<span style="padding-top: 0px;">香港北角蚬壳街9-23号<br> 秀明中心25楼F室 </span>
			</div>
			<br> <a href="/pdf/map_hk.pdf" target="_new">Download PDF Map</a></span>
			<p>
				Tel&nbsp;&nbsp;&nbsp;+852 ∙ 2735 1163 <br> <a
					href="mailto:info@asiapack.com">info@asiapack.com</a>

			</p>
		</div>


		<div class="col-md-4">

			<span class="h2"><i class="small icon-home"></i> China</span>
			<p>
				Shenzhen Export Processing Zone<br> 3rd floor, Nb.2 Jinsheng 4th Rd,
				Lanzhu Rd North side. <br> Pingshan, Shenzhen 518118 <br> <a
					href="mailto:info@asiapack.com">info@asiapack.com</a>


			</p>


			<div>
				深圳市坪山新区兰竹路以北锦盛四路2号珈伟工业厂区厂房A301、B301 <br>加工区兰竹西路&nbsp;518118
			</div>

			<br> <a href="/pdf/map_sz.pdf" target="_new">Download PDF Map</a><br>
			Tel&nbsp;&nbsp;&nbsp;+86 ∙ 755 3321 0315<br> <a
				href="mailto:info@asiapack.com">info@asiapack.com</a>
			</p>
		</div>
		<div class="col-md-4">
			<span class="h2"><i class="small icon-home"></i> USA</span>
			<p>
				California<br> USA<br>

			</p>
			<div>

				<p>
					<a href="skype:charles.asiapack?call"><img
						src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/images/skype.png" alt="Skype Meâ„¢!"
						align="left" border="0" height="100" width="137"> </a>
				</p>
				<div style="width: 400px; padding-top: 20px">
					<span style="margin-top: 45px">Skype with us!</span>



				</div>



			</div>

		</div>

		<div class="col-md-4">
			<a href="mailto:info@asiapack.com">info@asiapack.com</a>
		</div>

		<div class="row col-md-12"></div>

		<div class="row">
			<form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
"
				method="post" enctype="multipart/form-data">


				<div class="col-md-12">
					<br /> <br /> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


					<h3>E-mail</h3>
					<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
					<div class="confirmation"><?php echo smartyTranslate(array('s'=>'Email sent !'),$_smarty_tpl);?>
</div>
					<?php } else { ?>
					<div class="form-group ">
						<label for="name" class="sr-only">Company name</label> <input
							id="company" name="company" class="form-control"
							placeholder="Company name" type="text">
					</div>
					<div class="form-group ">
						<label for="nom" class="sr-only">Your name</label> <input id="nom"
							name="nom" class="form-control" placeholder="Your name"
							type="text">
					</div>
					<div class="form-group ">
						<label for="email" class="sr-only">Your email</label> <input
							id="email" name="from" class="form-control"
							placeholder="Your email" type="email">
					</div>
					<div class="form-group ">
						<label for="phone" class="sr-only">Phone</label> <input id="phone"
							name="phone" class="form-control" placeholder="Contact number"
							type="text">
					</div>
					<div class="form-group ">
						<label for="message" class="sr-only">Message</label>
						<textarea id="message" name="message" cols="30" rows="5"
							class="form-control" placeholder="Message"></textarea>
					</div>

					<div class="form-group ">

						<!-- christine
<select>
	  <option name="firstorder">First order quantity</option>
  <option value="2000">2 000</option>
  <option value="5000">5 000</option>
  <option value="10000">10 000</option>
  <option value="50000">50 000 +</option>
</select>
-->

					</div>

					<input name="id_order" value="1" type="hidden"> <input
						name="id_contact" value="2" type="hidden"> <input
						class="form-control grey" name="id_order" id="id_order" value=""
						type="hidden">
					<div class="col-md-12">

						<label class="touch-contact"><input class="checkbox"
							type="checkbox" id="newsletter" value="1">&nbsp;&nbsp;Do you want
							to subscribe to our newsletter ?</label>
					</div>


					<button type="submit" name="submitMessage" id="submitMessage"
						class="btn btn-outline btn-lg">Send</button>
					<?php }?>
			
			</form>
			<br /> <br />
		</div>

		<div id="map"></div>
	</div>

</div>
</div>
 </section>
<?php }} ?>
