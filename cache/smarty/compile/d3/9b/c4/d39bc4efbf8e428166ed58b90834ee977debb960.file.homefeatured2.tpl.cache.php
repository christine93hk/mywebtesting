<?php /* Smarty version Smarty-3.1.19, created on 2017-09-05 11:43:32
         compiled from "/home/asiapack/prestashop-prod/modules/homefeatured2/views/templates/hook/homefeatured2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142009299759ae71c417da40-89227371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd39bc4efbf8e428166ed58b90834ee977debb960' => 
    array (
      0 => '/home/asiapack/prestashop-prod/modules/homefeatured2/views/templates/hook/homefeatured2.tpl',
      1 => 1504585809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142009299759ae71c417da40-89227371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'productImgs' => 0,
    'productImg' => 0,
    'link' => 0,
    'productCnt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ae71c41cb8f5_32414485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ae71c41cb8f5_32414485')) {function content_59ae71c41cb8f5_32414485($_smarty_tpl) {?>

<link rel="stylesheet" type="text/css" href="/themes/default-asiapack/css/plugin/jquery.fancybox.css">
<!-- MODULE Home Featured Products -->
	<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
<section id="fh5co-work" data-section="work">
		<div id="homefeatured2" class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<br/><br/><br/>
					<h2 class="to-animate">Gallery</h2>
				</div>

			</div>
			
			<div class="row row-bottom-padded-sm">
			<?php $_smarty_tpl->tpl_vars['productCnt'] = new Smarty_variable(1, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['productImgs'] = new Smarty_variable(Product::getProductImages(intval($_smarty_tpl->tpl_vars['product']->value['id_product'])), null, 0);?>	
				
				<div class="col-md-4 col-sm-6 col-xs-12">
					<?php  $_smarty_tpl->tpl_vars['productImg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productImg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productImgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productImg']->key => $_smarty_tpl->tpl_vars['productImg']->value) {
$_smarty_tpl->tpl_vars['productImg']->_loop = true;
?>
					
						
						<?php if ($_smarty_tpl->tpl_vars['product']->value['id_image']==$_smarty_tpl->tpl_vars['productImg']->value) {?>
							<div class="fh5co-text text-center">
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['productImg']->value,'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="fh5co-project-item to-animate fancybox" rel="gallery<?php echo $_smarty_tpl->tpl_vars['productCnt']->value;?>
" >
								<span class="number"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration'];?>
</span>
								
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['productImg']->value,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" width="188" height="118"></img>
								<h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>	
								</a>
							</div>
						<?php } else { ?>

							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['productImg']->value,'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="fancybox hidden" rel="gallery<?php echo $_smarty_tpl->tpl_vars['productCnt']->value;?>
">
								<span class="number"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration'];?>
</span>
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['productImg']->value,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" width="188" height="118" />
								<h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
							</a>
								

						
						<?php }?>
						
					<?php } ?>
				</div>
				<?php $_smarty_tpl->tpl_vars['productCnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['productCnt']->value+1, null, 0);?>
				<?php } ?>
			</div>		
				

			<div class="clearfix visible-sm-block">
			</div>

		</div>
</section>









	<?php } else { ?>
		<p><?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</p>
	<?php }?>
<!-- /MODULE Home Featured Products -->


<script type="text/javascript">
$(document).ready(function(){
	//var productCnt
	var pc = "<?php echo $_smarty_tpl->tpl_vars['productCnt']->value;?>
"; 
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

<?php }} ?>
