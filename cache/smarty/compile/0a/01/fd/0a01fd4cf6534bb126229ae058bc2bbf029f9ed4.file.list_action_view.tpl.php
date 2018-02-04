<?php /* Smarty version Smarty-3.1.19, created on 2018-01-26 10:33:48
         compiled from "/home/asiapack/prestashop-prod/admin053ph6cbx/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9121173745a6af5fcbe6a74-88885608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a01fd4cf6534bb126229ae058bc2bbf029f9ed4' => 
    array (
      0 => '/home/asiapack/prestashop-prod/admin053ph6cbx/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1503389465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9121173745a6af5fcbe6a74-88885608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6af5fcbef958_08691750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6af5fcbef958_08691750')) {function content_5a6af5fcbef958_08691750($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
