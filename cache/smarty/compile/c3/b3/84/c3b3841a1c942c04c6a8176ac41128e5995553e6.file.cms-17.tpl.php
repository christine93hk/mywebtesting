<?php /* Smarty version Smarty-3.1.19, created on 2018-01-16 17:05:16
         compiled from "/home/asiapack/prestashop-prod/themes/default-asiapack/cms-17.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10080071835a5e22bc42ae31-58598445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3b3841a1c942c04c6a8176ac41128e5995553e6' => 
    array (
      0 => '/home/asiapack/prestashop-prod/themes/default-asiapack/cms-17.tpl',
      1 => 1503388886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10080071835a5e22bc42ae31-58598445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5e22bc432773_25677922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5e22bc432773_25677922')) {function content_5a5e22bc432773_25677922($_smarty_tpl) {?>
<form method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
/upload.php" style="color:black;">
    <div class="h2"><font color="black">Select press pdf/doc/docx to upload:</font></div>
    <br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <div class="h4"><font color="black">Passcode:</font></div>
    <input type="text" name="passcode" id="passcode">
    <br><br>
    <input type="submit" value="Upload File" name="submit">
    <br>
</form>
<style>
    input[type=text] {

    color: black;
}
</style>
<?php }} ?>
