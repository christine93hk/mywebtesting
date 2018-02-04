<?php /* Smarty version Smarty-3.1.19, created on 2018-02-04 04:21:01
         compiled from "/home/asiapack/prestashop-prod/themes/default-asiapack/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11554674215a767c1d400257-53134870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68f168476a3756f92dc931c57935095d193c1c12' => 
    array (
      0 => '/home/asiapack/prestashop-prod/themes/default-asiapack/footer.tpl',
      1 => 1515412828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11554674215a767c1d400257-53134870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'base_dir' => 0,
    'js_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a767c1d419b04_38384614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a767c1d419b04_38384614')) {function content_5a767c1d419b04_38384614($_smarty_tpl) {?> <?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index') {?>
</div>
</div>


</section>

<?php }?>


<footer id="footer" role="contentinfo"> <a href="#"
	class="gotop js-gotop"><i class="icon-arrow-up2"></i> </a>
<div class="container" style="position: absolute;">
	<div class="row">
		<div class="col-md-4">
			<ul>
				<li><a class="external" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#fh5co-contact">Contact Us</a>
				</li>
				<li><a class="external" href="/content/6-faq"><span>FAQ</span> </a>
				</li>
				<li><a class="external" href="/content/8-container-dimensions"><span>Useful
							Information</span> </a></li>

				<li><a class="external" href="/content/15-press"><span>Press</span> </a></li>

			</ul>

		</div>
		<div class="col-md-4">
			<strong>Hong Kong</strong><br /> Unit F, 25/F, Seabright Plaza<br />
			North Point, Hong Kong<br /> Tel +852 2735 1163<br />

		</div>
		<div class="col-md-4">
			<strong>China Shenzhen Export Zone</strong><br /> 3rd floor, Nb.2
			Jinsheng 4th Rd, Lanzhu Rd North side, Pingshan, Shenzhen<br /> Tel
			+86 755 3321 0315<br />

		</div>

	</div>



	<div class="row">
		<div class="small col-md-12 text-center">
			<br /> <br />
			<p>&copy; Asiapack LTD. All Rights Reserved.</p>

		</div>
	</div>
</div>
</footer>



<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>


 <?php }?> <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='cms') {?> 
<script>
	$('.question').click(function(){
		var dis = $(this).next().css('display');
		$('.ans').slideUp();

		if(dis =='none' ){
			$(this).next().slideDown();
		}else{
			$(this).next().slideUp();

		}

	})



	
</script>
 <?php }?> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script
	src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

<!-- jQuery Easing -->
<script
	src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
bootstrap.min.js"></script>
<!-- Waypoints -->
<script
	src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script
	src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery.stellar.min.js"></script>
<!-- Counter -->
<script
	src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script
	src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery.magnific-popup.min.js"></script>
<script
	src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
magnific-popup-options.js"></script>
<!-- Google Map -->
<script
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
google_map.js"></script>



<!-- Main JS (Do not remove) -->
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
main.js"></script>
<!-- HOOK HEADER -->
</body>
</html>
<?php }} ?>
