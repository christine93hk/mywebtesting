<?php /* Smarty version Smarty-3.1.19, created on 2018-01-24 10:15:32
         compiled from "/home/asiapack/prestashop-prod/themes/default-asiapack/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9331334365a684eb40e98e2-77083307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '357f6a84853fdf0534bdbeb06526cd6b1d1b4fb7' => 
    array (
      0 => '/home/asiapack/prestashop-prod/themes/default-asiapack/store_infos.tpl',
      1 => 1503388890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9331334365a684eb40e98e2-77083307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a684eb4101719_68276694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a684eb4101719_68276694')) {function content_5a684eb4101719_68276694($_smarty_tpl) {?>


	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
	<?php } ?>

<?php }} ?>
