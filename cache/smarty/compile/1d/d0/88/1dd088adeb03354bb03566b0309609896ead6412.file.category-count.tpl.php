<?php /* Smarty version Smarty-3.1.19, created on 2017-12-29 09:40:20
         compiled from "/home/asiapack/prestashop-prod/themes/default-asiapack/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19485369595a45ff74c57cd8-00606844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dd088adeb03354bb03566b0309609896ead6412' => 
    array (
      0 => '/home/asiapack/prestashop-prod/themes/default-asiapack/category-count.tpl',
      1 => 1503388886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19485369595a45ff74c57cd8-00606844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a45ff74c6e472_81702059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a45ff74c6e472_81702059')) {function content_5a45ff74c6e472_81702059($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
