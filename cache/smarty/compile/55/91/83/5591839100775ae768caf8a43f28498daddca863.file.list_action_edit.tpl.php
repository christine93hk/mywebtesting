<?php /* Smarty version Smarty-3.1.19, created on 2018-01-08 09:16:51
         compiled from "/home/asiapack/prestashop-prod/admin053ph6cbx/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20932755915a5328f3eabbd8-28890507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5591839100775ae768caf8a43f28498daddca863' => 
    array (
      0 => '/home/asiapack/prestashop-prod/admin053ph6cbx/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1503389464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20932755915a5328f3eabbd8-28890507',
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
  'unifunc' => 'content_5a5328f3eb4f51_75083531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5328f3eb4f51_75083531')) {function content_5a5328f3eb4f51_75083531($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
