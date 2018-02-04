<?php /* Smarty version Smarty-3.1.19, created on 2018-02-03 20:14:37
         compiled from "/home/asiapack/prestashop-prod/themes/default-asiapack/cms-15.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19397892345a760a1d3cbcc6-05341613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3255441929eac409c90b646c647d49d70ce981c8' => 
    array (
      0 => '/home/asiapack/prestashop-prod/themes/default-asiapack/cms-15.tpl',
      1 => 1503388886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19397892345a760a1d3cbcc6-05341613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_dir' => 0,
    'files' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a760a1d3f6686_79128036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a760a1d3f6686_79128036')) {function content_5a760a1d3f6686_79128036($_smarty_tpl) {?><div class="col-md-12 section-heading text-center to-animate fadeInUp animated">
	<h2>Press</h2>
</div>
<?php echo chdir('pdf/press');?>

<?php $_smarty_tpl->tpl_vars["files"] = new Smarty_variable(json_encode(array_diff(glob("*.*"),array('.','..'))), null, 0);?>
<div id="table">
<table id="PressTable" width="600" border="0" cellspacing="0" cellpadding="0"  style="border: 1px solid #ccc; border-top: none; border-bottom: none;margin: 0px auto;    ">
<tbody>
<tr style="background: rgb(182, 182, 182) none repeat scroll 0% 0%;color:black;">
<td class="cellside1"><strong>Date</strong></td>
<td class="celltop">News Article</td>
</tr>

</tbody>
</table>
</div>



<script type="text/javascript">

function press($files){    
    var div = document.getElementById('table');
    var tbl =  document.getElementById('PressTable');
    tbl.style.width = '100%';
    tbl.setAttribute('border', '1');
	tbl.setAttribute('table-layout', 'auto');
    var tbdy = document.createElement('tbody');
    tbl.appendChild(tbdy);
    for( var i=0 ; i < $files.length; i++){
        var tr = document.createElement('TR');
        tbdy.appendChild(tr);

        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var d=new Date($files[i].substring(0,4),$files[i].substring(4,6),$files[i].substring(6,8));
        td1.appendChild(document.createTextNode(d.toISOString().substring(0, 10)));
        td1.setAttribute('style', 'color:black !important;');
		td1.setAttribute('white-space', 'nowrap');
        //td2.appendChild(document.createTextNode($files[i].substring(9,$files[i].length-4).split('_').join(' ')));
        var a = document.createElement('a');
        var link = "<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
pdf/press/"+$files[i];
        a.setAttribute('href', link);
        a.innerHTML= $files[i].substring(9,$files[i].length-4).split('_').join(' ');
        td2.appendChild(a);
        tr.appendChild(td1);
        tr.appendChild(td2);
        tbdy.appendChild(tr);
    }
    div.appendChild(tbl);
}

press(<?php echo $_smarty_tpl->tpl_vars['files']->value;?>
);
</script>


<?php }} ?>
