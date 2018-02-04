<?php /* Smarty version Smarty-3.1.19, created on 2018-02-04 04:21:01
         compiled from "/home/asiapack/prestashop-prod/themes/default-asiapack/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7860398445a767c1d299010-64360168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7845eefd8b0fa82b3f07fc5b55964e111c38048' => 
    array (
      0 => '/home/asiapack/prestashop-prod/themes/default-asiapack/header.tpl',
      1 => 1504604961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7860398445a767c1d299010-64360168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'languages' => 0,
    'language' => 0,
    'id_shop' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'css_dir' => 0,
    'HOOK_HEADER' => 0,
    'js_defer' => 0,
    'js_files' => 0,
    'js_def' => 0,
    'js_uri' => 0,
    'content_dir' => 0,
    'page_name' => 0,
    'body_classes' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'lang_iso' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'HOOK_TOP' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'lang_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a767c1d3f9000_86874903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a767c1d3f9000_86874903')) {function content_5a767c1d3f9000_86874903($_smarty_tpl) {?><?php if (!is_callable('smarty_function_implode')) include '/home/asiapack/prestashop-prod/tools/smarty/plugins/function.implode.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->

<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['language']->value['id_shop']==1) {?>
		<?php $_smarty_tpl->tpl_vars["id_shop"] = new Smarty_variable("1", null, 0);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['language']->value['id_shop']==5) {?>
		<?php $_smarty_tpl->tpl_vars["id_shop"] = new Smarty_variable("5", null, 0);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['language']->value['id_shop']==6) {?>
		<?php $_smarty_tpl->tpl_vars["id_shop"] = new Smarty_variable("6", null, 0);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['language']->value['id_shop']==7) {?>
		<?php $_smarty_tpl->tpl_vars["id_shop"] = new Smarty_variable("7", null, 0);?>
	<?php }?>
<?php } ?>

<html <?php if ($_smarty_tpl->tpl_vars['id_shop']->value==1) {?>lang="en-us"<?php } elseif ($_smarty_tpl->tpl_vars['id_shop']->value==5) {?>lang="fr-fr"<?php } elseif ($_smarty_tpl->tpl_vars['id_shop']->value==6) {?>lang="de-de"<?php } elseif ($_smarty_tpl->tpl_vars['id_shop']->value==7) {?>lang="es-es"<?php }?>>
	<head>
		<meta charset="utf-8">
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
		<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value) {?>
			<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
			<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<link rel="shortcut icon" href="favicon.ico">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
		<!-- Animate.css -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
icomoon.css">
		<!-- Simple Line Icons -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
simple-line-icons.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
magnific-popup.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
bootstrap.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
style.css">

	<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

	<?php if (isset($_smarty_tpl->tpl_vars['js_defer']->value)&&!$_smarty_tpl->tpl_vars['js_defer']->value&&isset($_smarty_tpl->tpl_vars['js_files']->value)&&isset($_smarty_tpl->tpl_vars['js_def']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

			<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"></script>
			<?php } ?>
	<?php }?>
	<link rel="stylesheet" href="/themes/default-asiapack/css/modules/blocklanguages/blocklanguages.css" type="text/css" media="all" />



					<link rel="stylesheet" href="/themes/default-asiapack/css/modules/homeslider/homeslider.css" type="text/css" media="all" />
					<link rel="stylesheet" href="/js/jquery/plugins/bxslider/jquery.bxslider.css" type="text/css" media="all" />
					<link rel="stylesheet" href="/modules/poslogo/css/logo.css" type="text/css" media="all" />
					<script type="text/javascript" src="/themes/default-asiapack/js/modules/homeslider/js/homeslider.js"></script>
					<script type="text/javascript" src="/js/jquery/plugins/bxslider/jquery.bxslider.js"></script>
					<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
modules/poslogo/js/pos.bxslider.min.js"></script>
					<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
modules/poslogo/js/owl.carousel.min.js"></script>
					<!-- Lead the Way -->
					<script type="text/javascript" src="https://gl.hostcg.com/js/genlead.js"></script>
					
					<script type="text/javascript">
						(function(){init_multiplegl('https://gl.hostcg.com/',[['https://gl.hostcg.com/','724','gc28v3xy0z']]);})();

					</script>
					<noscript><img src="https://gl.hostcg.com/js/tracker.php?idsite=261&clesite=b4mbm4psin" style="border:0;" alt="" /></noscript>
					<!-- End Lead the Way Code -->
					<script>
					  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
					  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

					  ga('create', 'UA-102839626-1', 'auto');
					  ga('send', 'pageview');

					</script>
					
					
	</head>

	<body<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['body_classes']->value)&&count($_smarty_tpl->tpl_vars['body_classes']->value)) {?> <?php echo smarty_function_implode(array('value'=>$_smarty_tpl->tpl_vars['body_classes']->value,'separator'=>' '),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value) {?> hide-left-column<?php } else { ?> show-left-column<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value) {?> hide-right-column<?php } else { ?> show-right-column<?php }?><?php if (isset($_smarty_tpl->tpl_vars['content_only']->value)&&$_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?> lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">


		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value) {?>
			<div id="restricted-country">
				<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['geolocation_country']->value)&&$_smarty_tpl->tpl_vars['geolocation_country']->value) {?> <span class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['geolocation_country']->value, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></p>
			</div>
		<?php }?>
	<header role="banner" id="fh5co-header">
			<div class="container">
					<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>
<?php }?>

				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>

		         <a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>
				</a>
		        </div>

		        <div id="navbar" class="navbar-collapse collapse">

		          <ul class="nav navbar-nav navbar-right">
		          <?php if ($_smarty_tpl->tpl_vars['lang_id']->value==2) {?>
			          	<!-- ENGLISH -->
			            <li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
"<?php }?> data-nav-section="home"><span>Home</span></a></li>
			            <li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured"<?php }?> data-nav-section="serv"><span>Services</span></a></li>
			            <li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured2"<?php }?> data-nav-section="work"><span>Gallery</span></a></li>
									<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#fh5co-testimonials"<?php }?> data-nav-section="testimonials"><span>Clients</span></a></li>
			            <li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
##fh5co-contact"<?php }?> data-nav-section="contact"><span>Contact Us</span></a></li>
									<?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==7) {?>
									<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
"<?php }?> data-nav-section="home"><span>主页</span></a></li>
									<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured"<?php }?> data-nav-section="serv"><span>产品&amp;服务</span></a></li>
									<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured2"<?php }?> data-nav-section="work"><span>产品展示</span></a></li>
									<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#fh5co-testimonials"<?php }?> data-nav-section="testimonials"><span>客户</span></a></li>
									<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
##fh5co-contact"<?php }?> data-nav-section="contact"><span>联系我们</span></a></li>
									<?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==1) {?>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
"<?php }?> data-nav-section="home"><span>Accueil</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured"<?php }?> data-nav-section="serv"><span>Services</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured2"<?php }?> data-nav-section="work"><span>Gallerie</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#fh5co-testimonials"<?php }?> data-nav-section="testimonials"><span>Clients</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
##fh5co-contact"<?php }?> data-nav-section="contact"><span>Contactez-nous</span></a></li>
								<?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==3) {?>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
"<?php }?> data-nav-section="home"><span>Home</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured"<?php }?> data-nav-section="serv"><span>Produkten &amp; Dienstleistungen</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured2"<?php }?> data-nav-section="work"><span>Galerie</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#fh5co-testimonials"<?php }?> data-nav-section="testimonials"><span>Kunden</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
##fh5co-contact"<?php }?> data-nav-section="contact"><span>Kontakt</span></a></li>
								<?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==5) {?>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
"<?php }?> data-nav-section="home"><span>Inicio</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured"<?php }?> data-nav-section="serv"><span>Productos y Servicios</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured2"<?php }?> data-nav-section="work"><span>Galería</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#fh5co-testimonials"<?php }?> data-nav-section="testimonials"><span>Clientes</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
##fh5co-contact"<?php }?> data-nav-section="contact"><span>Contáctanos</span></a></li>
								<?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==6) {?>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
"<?php }?> data-nav-section="home"><span>主頁</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured"<?php }?> data-nav-section="serv"><span>產品與服務</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#homefeatured2"<?php }?> data-nav-section="work"><span>設計樣品</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
#fh5co-testimonials"<?php }?> data-nav-section="testimonials"><span>客戶</span></a></li>
								<li><a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>href="#"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
##fh5co-contact"<?php }?> data-nav-section="contact"><span>聯絡我們</span></a></li>
    						<?php }?>
		            <li>

									<script>
									$(function () {
										$('nav li ul').hide().removeClass('fallback');
										$('nav li').hover(function () {
											$('ul', this).stop().slideToggle(200);
										});
									});
									</script>

  <button style="cursor:pointer" class="btn btn-default dropdown-toggle version" type="button" data-toggle="collapse" aria-haspopup="true" aria-expanded="true">
<?php if ($_smarty_tpl->tpl_vars['lang_id']->value==2) {?>
   <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
images/usflag.png" border="0">
   <?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==1) {?>
  <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
images/frflag.png" border="0">
   <?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==3) {?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
images/deflag.png" border="0">
   <?php } elseif ($_smarty_tpl->tpl_vars['lang_id']->value==5) {?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
images/esflag.png" border="0">

   <?php }?>
    <span class="caret"></span>
  </button>
  <ul class="menu-lang dropdown-menu transparent" >

     <li><a class="external" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
en/"><img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
images/usflag.png" border="0"></a> </li>
           <li><a class="external" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
fr/"><img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
images/frflag.png" border="0"></a>    </li>
		   <li><a class="external" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
zh/"><img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
images/cnflag.png" border="0"></a> </li>
		   <li><a class="external" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
hk/"><img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
images/hkflag.png" border="0"></a> </li>
		   <li><a class="external" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
de/"><img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
images/deflag.png" border="0"></a> </li>
		   <li><a class="external" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
es/"><img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
images/esflag.png" border="0"></a>  </li>

  </ul>


</li>


		          </ul>




		        </div>

		  </div>

			    </nav>
			  <!-- </div> -->

	</header>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index') {?>
	<section id="fh5co-home" data-section="home" class="animated content" data-stellar-background-ratio="0.5">

			<div class="container bg-white" >


<?php }?>
<?php }} ?>
