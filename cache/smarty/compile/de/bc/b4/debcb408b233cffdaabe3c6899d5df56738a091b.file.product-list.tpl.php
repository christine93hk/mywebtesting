<?php /* Smarty version Smarty-3.1.19, created on 2017-12-29 09:40:21
         compiled from "/home/asiapack/prestashop-prod/themes/default-asiapack/product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9242131205a45ff75049ff9-21267055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'debcb408b233cffdaabe3c6899d5df56738a091b' => 
    array (
      0 => '/home/asiapack/prestashop-prod/themes/default-asiapack/product-list.tpl',
      1 => 1503388889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9242131205a45ff75049ff9-21267055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'page_name' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineTablet' => 0,
    'id' => 0,
    'class' => 0,
    'comparator_max_item' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a45ff7508c140_91201804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a45ff7508c140_91201804')) {function content_5a45ff7508c140_91201804($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/asiapack/prestashop-prod/tools/smarty/plugins/function.math.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	
	<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='product') {?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(3, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(2, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(3, null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(3, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(2, null, 0);?>
	<?php }?>
	
	<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

	<!-- Products list -->
	<ul<?php if (isset($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?> class="product_list grid <?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>">
	
	

				<div class="col-md-12 section-heading text-center">
					<br /><br /><br />
					<h2>Products & Services</h2>
				

				</div>
				<!-- added by christine -->
				<div style="text-align: center">
				<a href="/pdf/asiapack_brochure.pdf" target="_new" ><span>Download our brochure</span>
				<i class="icon-file-pdf-o"><span></span></i></a>
				<br /><br />
				</div>		
				

	<section id="fh5co-intro2">

		<div class="container">
			<div class="row col-md-12">

				<div class="fh5co-block" style="background: #80c24a;">
					<div class="overlay-darker2"><br><br><br><br><br><br><br><br>
						<p>
							We provide Co-Packing services in China.<br/>
							Fully owned facility in Shenzen Export Processing Zone, Customs Bonded Area
						</p></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon2-icon-pack"></i>

						<h2>Pack</h2>
						<p></p>




					</div>
				</div>

				<div class="fh5co-block" style="background: #80c24a;">
					<div class="overlay-darker2"><br><br><br><br><br><br><br><br>
						<p> Eco-creative 3R policy –Reduce, Re-use, Recycle
							<br/>
							We design a pack that matches your Distribution parameters
						</p>
					</div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon3-icon-good-design-1"></i>

						<h2>DESIGN</h2>


					</div>
				</div>



				<div class="fh5co-block" style="background: #80c24a;">
					<div class="overlay-darker2"><br><br><br><br><br><br><br><br><p>IN HOUSE Customized Blisters<br/>Packaging Consistency: Asiapack manages the whole printing process</p></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon3-icon-good-packaging-1"></i>

						<h2>PACKING MATERIALS</h2>


					</div>
				</div>

				<div class="fh5co-block" style="background: #80c24a;">
					<div class="overlay-darker2"><br><br><br><br><br><br><br><br><p>Our factory is certified with ISO 9001:2008<br/>We perform Quality Control: IQC, IPQC, OQC</p></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon3-icon-good-QC-2"></i>

						<h2>QC</h2>


					</div>
				</div>

<div class="fh5co-block" style="background: #80c24a;">
					<div class="overlay-darker2"><br><br><br><br><br><br><br><br><p>Reducing your inventory, lead-times & risks<br/>We act as your own logistics platform in Asia</p></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon2-icon-stock"></i>

						<h2>STOCK</h2>


					</div>
				</div>


<div class="fh5co-block" style="background: #80c24a;">
					<div class="overlay-darker2"><br><br><br><br><br><br><br><br><p>Assembled and pre-loaded promotional displays, ready for worldwide distribution & great sales!</p></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon3-icon-good-display"></i>

						<h2>DISPLAYS</h2>


					</div>
				</div>


<div class="fh5co-block" style="background: #80c24a;">
					<div class="overlay-darker2"><br><br><br><br><br><br><br><br><p>Late Product Customization<br>Reducing inventory & increasing flexibility!</p></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon3-icon-good-postponment-1"></i>

						<h2>POSTPONEMENT</h2>


					</div>
				</div>
<div class="fh5co-block" style="background: #80c24a;">
					<div class="overlay-darker2"><br><br><br><br><br><br><br><br><p>Create kits by assembling products from different suppliers, even from different countries</p></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon3-icon-good-kitting"></i>

						<h2>KITTING</h2>


					</div>
				</div>

<div class="fh5co-block" style="background: #80c24a;">
					<div class="overlay-darker2"><br><br><br><br><br><br><br><br><p>FREE consolidation of your packed products,<br>FREE stuffing of your containers, <br>FREE to select your own forwarder</p></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon2-icon-ship"></i>

						<h2>SHIP</h2>


					</div>
				</div>

			</div>

		</div>
	</section>







	</ul>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'min_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'max_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
