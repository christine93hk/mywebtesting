<?php /* Smarty version Smarty-3.1.19, created on 2018-02-03 20:14:47
         compiled from "/home/asiapack/prestashop-prod/themes/default-asiapack/cms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17580891935a760a27e223e4-88635825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a417ee54a5bfd802438109a6c1a599645f67baa' => 
    array (
      0 => '/home/asiapack/prestashop-prod/themes/default-asiapack/cms.tpl',
      1 => 1503388886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17580891935a760a27e223e4-88635825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms' => 0,
    'cms_category' => 0,
    'content_only' => 0,
    'base_dir' => 0,
    'link' => 0,
    'sub_category' => 0,
    'subcategory' => 0,
    'cms_pages' => 0,
    'cmspages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a760a27ef3bf9_41229506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a760a27ef3bf9_41229506')) {function content_5a760a27ef3bf9_41229506($_smarty_tpl) {?>
<!--add by Christine-->

<script type="text/javascript">
$(function() {
    var top = $('#sidebar').offset().top - parseFloat($('#sidebar').css('marginTop').replace(/auto/, 0));
    var footTop = $('#footerID').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));

    var maxY = footTop - $('#sidebar').outerHeight()*2-$(window).height();
    console.log(maxY);
    $(window).scroll(function(evt) {
        var y = $(this).scrollTop();

        if (y > top) {
            if (y < 15000) {
                $('#sidebar').addClass('fixed').removeAttr('style');
            } else {
                $('#sidebar').removeClass('fixed').css({
                    position: 'absolute',
                    top: (100) + 'px'
                });
            }
        } else {
            $('#sidebar').removeClass('fixed');
        }
    });
});
</script>


<div id="cms-page">

<?php if ($_smarty_tpl->tpl_vars['cms']->value->id_cms_category==3) {?>

<!--add by Christine-->
<div id="sidebar" class="col-xs-12 col-md-4">
	<h1>Useful Information</h1>

	<div style="padding:15px 0px 0px 0px;" class="h1">
   		<span class="h2" style="line-height:30px">Logistics</span><br/>
     
     		 <div id="navbar2">

     		<a href="#cont"><span>Container dimensions</span></a><br/>
			<a href="#ship"><span>Shipping pallets</span></a><br/>
			<a href="#ico"><span>Incoterms 2010</span></a><br/>
			
			 </div>



  	</div>
      
<div style="padding:15px 0px 0px 0px;" class="h1">
   <span class="h2" style="line-height:30px">Packaging and Inspection</span><br>
      <span class="h8">
      <a href="#11">Packaging definition</a><br>
      <a href="#12"><span style="line-height:20px;">Resin identification codes <br>and Greenpeace pyramid</span></a><br>
      <a href="#13">Corrugated carton</a><br>
      <a href="#14">AQL</a></span></div></div>


<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['cms']->value)&&!isset($_smarty_tpl->tpl_vars['cms_category']->value)) {?>
	<?php if (!$_smarty_tpl->tpl_vars['cms']->value->active) {?>
		<br />
		<div id="admin-action-cms">
			<p>
				<span><?php echo smartyTranslate(array('s'=>'This CMS page is not visible to your customers.'),$_smarty_tpl);?>
</span>
				<input type="hidden" id="admin-action-cms-id" value="<?php echo $_smarty_tpl->tpl_vars['cms']->value->id;?>
" />
				<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Publish'),$_smarty_tpl);?>
" name="publish_button" class="button btn btn-default"/>
				<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
" name="lnk_view" class="button btn btn-default"/>
			</p>
			<div class="clear" ></div>
			<p id="admin-action-result"></p>
		</div>
	<?php }?>
	<div class="rte<?php if ($_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?>">
		<div <?php if ($_smarty_tpl->tpl_vars['cms']->value->id==8) {?>style="float:right;"<?php }?>  class="col-xs-12 <?php if ($_smarty_tpl->tpl_vars['cms']->value->id!=6) {?>col-md-8<?php }?>">

		<?php if ($_smarty_tpl->tpl_vars['cms']->value->id_cms_category==3) {?>

		<?php } else { ?>
		<h1 style="text-transform:uppercase;margin-left:-16px;"><?php echo $_smarty_tpl->tpl_vars['cms']->value->meta_title;?>
</h1>
		<?php }?>


	

	<?php if ($_smarty_tpl->tpl_vars['cms']->value->id!=6) {?>
		<div id="cont"></div>
<br/>
<div class="h5">Container dimensions</div>


<div class="table-container">
<table border="0">
<tbody>
<tr style="background: rgb(182, 182, 182) none repeat scroll 0% 0%;color:white;">
<td class="cellside1"><strong>Equipment</strong></td>
<td class="celltop">20" Dry Freight Container</td>
<td class="celltop">40" Dry Freight Container</td>
<td class="celltop">40" High Cube Dry Container</td>
<td class="celltop">45" High Cube Dry Container</td>
</tr>
<tr>
<td class="cellside1" bgcolor="#f2f2f2"><strong>Interior <br />Dimensions</strong></td>
<td class="cell1" bgcolor="#f2f2f2">L 5.9m<br /> W 2.3m<br /> H 2.4m</td>
<td class="cell1" bgcolor="#f2f2f2">L 12.1m<br /> W 2.3m<br /> H 2.4m</td>
<td class="cell1" bgcolor="#f2f2f2">L 12.1m<br /> W 2.3m<br /> H 2.7m</td>
<td class="cell1" bgcolor="#f2f2f2">L 13.6m<br /> W 2.4m<br /> H 2.7m</td>
</tr>
<tr class="cell2">
<td class="cellside2" bgcolor="#e6e6e6"><strong>Door Opening</strong></td>
<td class="cell2" bgcolor="#e6e6e6">W 2.3m<br /> H 2.3m</td>
<td class="cell2" bgcolor="#e6e6e6">W 2.3m<br /> H 2.3m</td>
<td class="cell2" bgcolor="#e6e6e6">W 2.3m<br /> H 2.6m</td>
<td class="cell2" bgcolor="#e6e6e6">W 2.3m<br /> H 2.6m</td>
</tr>
<tr>
<td class="cellside1" bgcolor="#f2f2f2"><strong>Tare Weight</strong></td>
<td class="cell1" bgcolor="#f2f2f2">1.900 kg<br /> 4.189 lbs</td>
<td class="cell1" bgcolor="#f2f2f2">3.084 kg<br /> 6.799 lbs</td>
<td class="cell1" bgcolor="#f2f2f2">2.900 kg<br /> 6.393 lbs</td>
<td class="cell1" bgcolor="#f2f2f2">3.900 kg<br /> 8.598 lbs</td>
</tr>
<tr>
<td class="cellside2" bgcolor="#e6e6e6"><strong>Cubic Capacity</strong></td>
<td class="cell2" bgcolor="#e6e6e6">27 cbm</td>
<td class="cell2" bgcolor="#e6e6e6">58 cbm</td>
<td class="cell2" bgcolor="#e6e6e6">62 cbm</td>
<td class="cell2" bgcolor="#e6e6e6">85.7 cbm</td>
</tr>
<tr>
<td class="cellside1" bgcolor="#f2f2f2"><strong>Payload<br /></strong></td>
<td class="cell1" bgcolor="#f2f2f2">22.100 kg<br /> 48.721 lbs</td>
<td class="cell1" bgcolor="#f2f2f2">27.396 kg<br /> 60.397 lbs</td>
<td class="cell1" bgcolor="#f2f2f2">29.600 kg<br /> 65.256 lbs</td>
<td class="cell1" bgcolor="#f2f2f2">28.600 kg<br /> 63.052 lbs</td>
</tr>
</tbody>
</table>
</div>

<div id="ship"></div>
<br/><br/>
<div class="h5">Shipping pallets</div>
<div><span>Euro Pallets</span>
<p>1200mm x 800mm</p>
<p><img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/02-europaletts.jpg" alt="Euro Paletts" height="390" width="614" /></p>
<br /><span>US Pallets</span>
<p>48" x 40" x 5.5"</p>
<p><img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/03-uspaletts.jpg" alt="US Paletts" /></p>
<p><img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/04-uspaletts.jpg" alt="US Paletts" /></p>
<div id="divwrap">
<div id="divmain">
<div class="main_all2">
<div class="cola1">
<div class="faq1">Info</div>
<div class="item2">
<div class="question2">
<div class="icon_open2"></div>
What is ISPM15?</div>
<div class="ans2">The International Standard for Phytosanitary Measures, publication #15.</div>
</div>
<div class="item2">
<div class="question2">Why ISPM15?</div>
<div class="ans2">To prevent the international transport and spread of disease and insects that could negatively affect plants or ecosystems.</div>
</div>
<div class="item2">
<div class="question2">ISPM15 requirements?</div>
<div class="ans2">WPM (pallets, crates, etc.) to be heat treated or fumigated with methyl bromide first. Then stamped with a mark of compliance.</div>
</div>
<div class="item2">
<div class="question2">What is classed as WPM?</div>
<div class="ans2">ISPM15 applies to coniferous softwood and non-coniferous hardwood used as raw wood packaging material. Products exempt are made from alternative material, like paper, plastic or wood panel products.</div>
</div>
<div class="item2">
<div class="question2">More info?</div>
<div class="ans2">Link: <a href="https://www.ippc.int/publications/regulation-wood-packaging-material-international-trade-0" target="_blank">IPPC</a></div>
</div>
</div>
</div>
</div>
</div>
</div>


<div id="ico"></div>
<br/><br/>
<div class="h5">Incoterms 2010</div>
<div id="info02">
<p><img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/incoterms.jpg" alt="Incoterms 2010" /></p>
<br /><span class="h5" style="color: #7fc249;">From Chinese suppliers to Asiapack</span>
<p>Incoterm : FCA = FREE CARRIER</p>
<p style="text-align: justify;">Free Carrier means that the seller fulfils his obligation to deliver when he has handed over the goods, cleared for export, into the charge of Asiapack at the Shenzhen Export Processing Zone.</p>
<br /><span class="h5" style="color: #7fc249;">From Asiapack to YOU</span>
<p>Incoterm : EXW = Ex Works</p>
<p style="text-align: justify;">"Ex works" means that Asiapack fulfils his obligation to deliver when he has made the goods available at his premises to the buyer. The buyer bears all costs and risks involved in taking the goods from the seller's premises to the desired destination.</p>
<br /><span class="h5" style="color: #7fc249;">From YOU to your customer</span>
<p>YOU can sell to your own customer under Asiapack EXW term, or FOB</p>
<p>Incoterm :FOB = Free on Board (named port of shipment)</p>
<p style="text-align: justify;">"Free on Board" means that the seller (YOU) fulfils his obligation to deliver when the goods have passed over the ship's rail at the named port of shipment. This means that the buyer has to bear all costs and risks of loss of or damage to the goods from that point. The FOB term requires the seller to clear the goods for export.</p>
<p><span style="color: #7fc249;">Rules for any mode or modes of transport</span></p>
EXW <br /> FCA <br /> CPT<br /> CIP <br /> DAT <br /> DAP <br /> DDP Ex works<br /> Free carrier <br /> Carriage paid to<br /> Carriage and insurance paid to<br /> Delivered at terminal<br /> Delivered at place<br /> Delivered duty paid
<p><span style="color: #7fc249;">Rules for sea and inland waterway transport</span></p>
FAS <br /> FOB <br /> CFR <br /> CIF Free alongside ship<br /> Free on board<br /> Cost and freight<br /> Cost insurance and freight</div>


<div id="11"></div>
<br/><br/>
<div class="h5">Packaging definition</div>
<div class="main_all2">
<div class="cola1">
<div class="faq1">Packaging Terminology</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Thermoforming</strong></div>
<div class="ans2">Also named Vacuum forming The process of shaping a plastic sheet by heating the sheet and withdrawing the air between the sheet and mold.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Vacuum forming</strong></div>
<div class="ans2">Also named Thermoforming The process of shaping a plastic sheet by heating the sheet and withdrawing the air between the sheet and mold.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>PVC</strong></div>
<div class="ans2"><span class="highblk">Polyvinyl Chloride (PVC)</span> – Polyvinyl chloride.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>PP</strong></div>
<div class="ans2"><span class="highblk">Polypropylene (PP)</span></div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>PE</strong></div>
<div class="ans2"><span class="highblk">Polyethylene (PE)</span></div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>PET</strong></div>
<div class="ans2"><span class="highblk">Polyester / Polyethylene Terephtalate (PET)</span></div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>High frequency sealed blister</strong><br style="background-image:url(&quot;images/arrow-green2.png&quot;);" />Ultrasonic sealed blister<br style="background-image:url(&quot;images/arrow-green2.png&quot;);" />HF welded blister<br style="background-image:url(&quot;images/arrow-green2.png&quot;);" />HF ultrasonic blister</div>
<div class="ans2">The two blister halves are joined by high-frequency (HF) welding. The resulting joint can only be broken with a knife or scissors. Hence, HF welded blisters are perfect for heavy products and items attractive to shoplifters.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Sealed blister</strong><br style="background-image:url(&quot;images/arrow-green2.png&quot;);" /><strong>Heat sealed blister</strong></div>
<div class="ans2">The blister is sealed to the blister card by using heat and pressure. The card has a heat-activated coating.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Trapped blister</strong><br /><strong>Captured blister</strong></div>
<div class="ans2">The blister is placed between two pieces of cardboard sealed together. Both two single blisters or a double sides blister (clamshell) can be used. These are visible from both the front and the back of the packaging. This design has great promotional value as the contents are clearly visible. It is also attractive for environmental reasons, because the packaging components (plastic and cardboard) can be separated completely and it uses much less plastic than similar size HF sealed blister.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Shrink Wrap</strong></div>
<div class="ans2">The blister is placed between two pieces of cardboard sealed together. Both two single blisters or a double sides blister (clamshell) can be used. These are visible from both the front and the back of the packaging. This design has great promotional value as the contents are clearly visible. It is also attractive for environmental reasons, because the packaging components (plastic and cardboard) can be separated completely and it uses much less plastic than similar size HF sealed blister.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Corrugated</strong></div>
<div class="ans2">Corrugated is made from paper made up cellulose fibers. The board consists of formed fluting that is faced with a liner on both sides. Corrugated board consists of one or more sheets of fluted paper adhered to one or more liner papers. The manufacturing process requires at least two layers of paper, very high humidity (steam), glue and heating only, that’s why corrugated is treated as environmental friendly product.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Flutes</strong></div>
<div class="ans2">Arches in the corrugated carton are known as flutes, they resist bending and pressure from all directions, capable of supporting a great deal of weight. When pressure is applied to the side of the board, the space in between the flutes acts as a cushion to protect the container’s contents. At the same time, the vertical liner board provides more strength and protects the flutes from damage. Flutes come in several standard shapes or flute profiles (A, B, C, E, F, etc.). A-flute was the first to be developed and is the largest common flute profile. B-flute was next and is much smaller. C-flute followed and is between A and B in size. E-flute is smaller than B and F-flute is smaller yet.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Single-wall carton</strong></div>
<div class="ans2">This is a corrugated fiberboard carton made by gluing a sheet of fluted corrugated material between two flat sheets of linerboard.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Double-wall carton</strong></div>
<div class="ans2">This is a corrugated fiberboard carton made of three sheets of linerboard interleaved with two sheets of fluted corrugated material.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Drop Test</strong></div>
<div class="ans2">The purpose of this test is not only to test the actual package but also to see how well the intended content is protected by the package. The test simulates actual shocks by dropping the package and its intended content freely against a rigid plane surface from a predetermined height. The package is set up to hit the surface at a particular angle and on a particular attitude, face, edge or corner, of the package.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Vibration Test</strong></div>
<div class="ans2">Various forms of transportation vibrations can be simulated by means of a vibration test. The test-bench can be made to swing and vibrate in almost any direction with a number of frequencies and amplitudes to emulate the transportation being used.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Primary packaging</strong></div>
<div class="ans2">the wrapping or containers handled by the consumer.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Secondary packaging</strong></div>
<div class="ans2">The term used to describe larger cases or boxes that are used to group quantities of primary packaged goods for distribution .</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Shelf-ready packaging</strong></div>
<div class="ans2">Packaging that goes straight from the factory to point of sale without being unwrapped.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Shelf appeal</strong></div>
<div class="ans2">How a pack appears at point of sale against its competitors.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Die Cutting</strong></div>
<div class="ans2">The process of cutting carton or plastic into a shape</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Prototype</strong></div>
<div class="ans2">A model or mock-up of the proposed solution</div>
</div>
</div>
<!--end cola1 -->
<div class="cola2">
<div class="faq1">Package Printing &amp; <br />Printer's Terms</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>DPI</strong></div>
<div class="ans2">Dots per inch; a measure of a printer’s resolution. The higher the number, the better the print quality. A minimum of 300 dpi usually is required for professional-looking results. 72 dpi for web results.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>CMYK</strong></div>
<div class="ans2">Stands for the colors Cyan-Magenta-Yellow-Black. In print design, colors are defined as a percentage of each of these 4 colors. For example, the CMYK abbreviation for the color black would be 0-0-0-100. In contrast, display devices (i.e. computer monitors) typically define colors using RGB.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>FTP</strong></div>
<div class="ans2">Stands for File Transfer Protocol. FTP allows you to copy or send files (HTML-documents, graphic images, spreadsheets, etc ) from one computer to another via the Internet.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Offset/Lithographic Printing</strong></div>
<div class="ans2">Most print shops use offset printing to produce large volumes of high-quality documents. Although the equipment and set-up costs are relatively high, the actual printing process is relatively inexpensive. Its a printing technique whereby ink is spread on a metal plate with etched images, then transferred to an intermediary surface such as a rubber blanket, and finally applied to paper by pressing the paper against the intermediary surface. The equipment is a multi-station (up to eight) printing machine to print and/or coat up to six colours on to sheets or a fast-moving web.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Reverse Printing</strong></div>
<div class="ans2">Printing on a transparent film so that the printing will be on the inside of the package and be observed through the film. Permits a higher gloss package because no printing is on the outside, but usually places the printing in contact with the contents. Back printing is a more accurate term.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Digital Printing</strong></div>
<div class="ans2">It’s more expensive and poorer quality than Offset printing, but is good for small runs and for saving time. Mechanical Steps Are Eliminated, digital printing eliminates numerous mechanical steps in the conventional printing process, including making films, color proofs, manually stripping the pieces together and making plates.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Digital Proof</strong></div>
<div class="ans2">A type of hardcopy sample output directly from digital files, provided by the print provider and used by the client to verify the accuracy of their print application prior to the actual production of the project. Digital proofs give clients the assurance that their print applications will be produced accurately.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Screen Printing</strong></div>
<div class="ans2">Screen-printing is often used to print on assembled boxes. Printing is done directly on the box or sheet, by pressing the ink through a net template onto the plywood.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>4-color-process</strong></div>
<div class="ans2">The process of combining four basic colors to create a printed color picture or colors composed from the basic four colors.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Pantone Matching System (or PMS)</strong></div>
<div class="ans2">The Pantone matching system is used for specifying and blending match colors. It provides designers with swatches of over 700 colors and gives printers the recipes for making those colors. This is a way to spec out an exact universal color, whereas a 4 color process has a margin of error.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Bleed or Bleeding Edge</strong></div>
<div class="ans2">When a page or a cover design extends to and off the edge of the paper it is called a “bleed”. In print design, the artwork or block of color must extend off the edge of the page. The artwork or block of color is then printed on larger-size paper. Then the printed page is trimmed to the desired size.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Embossing</strong></div>
<div class="ans2">A pattern pressed into the backside of a surface to create a raised texture.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Crop marks</strong></div>
<div class="ans2">Printed lines showing where to trim a printed sheet.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Dieline</strong></div>
<div class="ans2">An electronic file usually supplied by the printer or client to show where the  measurements and the cut marks are for a specific print or package.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Matte Finish</strong></div>
<div class="ans2">Dull paper without gloss or luster.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Score</strong></div>
<div class="ans2">A crease put on paper to help it fold better.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Spot varnish</strong></div>
<div class="ans2">Varnish used to highlight a specific part of the printed sheet.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Hologram</strong></div>
<div class="ans2">A three-dimensional picture that is made on a photo sensitive glass plate using a laser as the light source. From this plate a shim is made and the image is stamped into a metallic foil.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Hot Stamping</strong></div>
<div class="ans2">Applying foil with the use of heat, pressure and dwell to various substrates, such as paper, plastic, wood and leather.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>UV coating</strong></div>
<div class="ans2">Liquid laminate bonded and cured with ultraviolet light. Environmentally friendly.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Varnish</strong></div>
<div class="ans2">A clear liquid applied to printed surfaces for looks and protection. (UV coating looks better.)</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>SKU (stock keeping unit)</strong></div>
<div class="ans2">An individual product line and size variant</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>UPC Bar Code</strong></div>
<div class="ans2">The number and symbol that identifies the exact product in terms of size, color, configuration and other attributes.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Consolidation</strong></div>
<div class="ans2">The combination of two or more consignments to create a more economical freight solution.</div>
</div>
<div class="item2">
<div class="question2">
<div class="icon_open2" style="background-image:url(&quot;images/arrow-greys.png&quot;);"></div>
<strong>Pick-and-Pack</strong></div>
<div class="ans2">The process by which goods are picked against customers' orders and then packed for onward distribution.</div>
</div>
</div>
<!--end cola2 --></div>


<div id="12"></div>
<br/><br/>
<div class="h5">Resin identification codes and Greenpeace pyramid</div>
<br />
<div id="info02"><span class="h5" style="color:#7fc249;">Plastic packaging resin identification codes <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/pdf/astmd7611.pdf" target="_blank" style="color:#4d4d4d;">- See pdf</a></span><br /><br />

<div class="table-container">

	<table border="0" cellpadding="0" cellspacing="0" width="630"><tbody><tr><td align="center" valign="top" width="25%"><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/new/1.jpg" alt="1.jpg" height="100" width="83" /></td>
<td align="center" valign="top" width="25%"><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/new/2.jpg" alt="2.jpg" height="100" width="83" /></td>
<td align="center" valign="top" width="25%"><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/new/3.jpg" alt="3.jpg" height="100" width="83" /></td>
<td align="center" valign="top" width="25%"><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/new/4.jpg" alt="4.jpg" height="100" width="83" /></td>
</tr><tr class="h6"><td style="padding:5px 0px 20px 0px;" align="center" valign="top" width="25%">Polyethylene <br /> terephthalate (PET)</td>
<td style="padding:5px 0px 20px 0px;" align="center" valign="top" width="25%">High density <br /> polyethylene (HDPE)</td>
<td style="padding:5px 0px 20px 0px;" align="center" valign="top" width="25%">Polivinyl <br /> chloride (PVC)</td>
<td style="padding:5px 0px 20px 0px;" align="center" valign="top" width="25%">Low density <br /> polyethylene (LDPE)</td>
</tr><tr><td align="center" valign="top" width="25%"><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/new/5.jpg" alt="5.jpg" height="100" width="83" /></td>
<td align="center" valign="top" width="25%"><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/new/6.jpg" alt="6.jpg" height="100" width="83" /></td>
<td align="center" valign="top" width="25%"><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/new/7.jpg" alt="7.jpg" height="100" width="83" /></td>
<td align="center" valign="top" width="25%"> </td>
</tr><tr class="h6"><td style="padding:5px 0px 20px 0px;" align="center" valign="top" width="25%">Polypropylene (PP)</td>
<td style="padding:5px 0px 20px 0px;" align="center" valign="top" width="25%">Polystyrene (PS) or expanded polystyrene (EPS)</td>
<td colspan="2" style="padding:5px 0px 20px 20px;" align="left" valign="top">Other materials which cannot be classified <br /> in any of the above. (e.g polycarbonate, <br /> polyamide and new biodegrable plastics)</td>
</tr></tbody></table>

</div>

<p><br /><br /><span class="h5" style="color:#7fc249;">Greenpeace pyramid</span></p>
<p><a href="http://archive.greenpeace.org/toxics/pvcdatabase/bad.html">
	<img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/05-09.png" alt="05-09.png" border="0" height="261" width="537" /></a></p>


<p>Packaging professionals recognize plastic as a wonderful material (light, durable and transparent) but also as a source of great environmental stress - in its petroleum-based extraction and its ecological persistence.</p>
<p>Nevertheless recent developments have significantly improved the re-use of higher percentages of recycled plastics, thus encouraging the reclamation of existing waste plastic. Biopolymers should slowly replace the use of plastics, but this cannot happen overnight.</p>

<p>As a manufacturer and direct consumer of plastic materials, Asiapack is aware of this critical environmental challenge.</p>
<p>Together let us empower each other to promote sustainable thinking with confidence and efficiency.</p>
</div>








<div id="13"></div>
<br/><br/>
<div class="h5">Corrugated carton</div>
<div id="info02">
	<div class="table-container">

<table border="0" cellpadding="0" cellspacing="0" width="630"><tbody><tr class="celltop"><td class="borderright" align="left" valign="top"></td>
<td class="borderright" align="center" valign="middle">Standards</td>
<td class="borderright" align="center" valign="middle">Typical Caliper (mm)<br /> (i.e. Thickness)</td>
<td align="center" valign="middle">Section</td>
</tr><tr class="cellside1"><td class="borderright" style="color:#262626;" align="left" valign="top">Single-face <br /> corrugated board</td>
<td class="borderright" align="left" valign="top">E Flute<br /> B Flute<br /> C Flute<br /> A Flute</td>
<td class="borderright" align="center" valign="top">1.1 – 1.8<br /> 2.1 – 3.0<br /> 3.2 - 3.9<br /> 4.0 - 4.8</td>
<td align="center" height="185" valign="middle"><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/06-01.png" alt="06-01.png" height="155" width="148" /></td>
</tr><tr class="cellside2"><td class="borderright" style="color:#262626;" align="left" valign="top">Double-wall <br /> corrugated board</td>
<td class="borderright" align="left" valign="top">EB Flute<br /> BC Flute<br /> CC Flute</td>
<td class="borderright" align="center" valign="top">4.06<br /> 6.50<br /> 7.33</td>
<td align="center" height="149" valign="middle"><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/06-02.png" alt="06-02.png" height="119" width="148" /></td>
</tr><tr class="cellside1"><td class="borderright" style="color:#262626;" align="left" valign="top">Triple-wall <br /> corrugated board</td>
<td class="borderright" align="left" valign="top">AAC Flute</td>
<td class="borderright" align="center" valign="top">15</td>
<td align="center" height="89" valign="middle"><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/06-03.png" alt="06-03.png" height="59" width="148" /></td>
</tr></tbody></table><br /><br /><table border="0" cellpadding="0" cellspacing="0" width="630"><tbody><tr class="celltop"><td align="center" valign="middle" width="20%">Single-wall</td>
<td class="borderright" align="center" valign="middle" width="25%">B flute<br /> Brown Carton</td>
<td class="borderright" align="center" valign="middle" width="25%">B flute<br /> White Carton</td>
<td align="center" valign="middle" width="30%">E flute<br /> Color Box</td>
</tr><tr class="cell1"><td style="color:#262626;" align="center" height="150" valign="middle" width="20%">Weakest<br /><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/06-04.png" alt="06-04.png" height="75" width="34" /><br /> Strongest</td>
<td class="borderright" align="center" height="150" valign="middle" width="25%">B33<br /> B3B<br /> A3B<br /> A3A<br /> K3A<br /> K3K</td>
<td class="borderright" align="center" height="150" valign="middle" width="25%">W3B<br /> ↓<br /> W3A<br /> ↓<br /> W3K</td>
<td align="center" height="150" valign="middle" width="30%">300G CCNB +9B<br /> ↓<br /> 300G CCNB +9A<br /> ↓<br /> 300G CCNB +9K</td>
</tr></tbody></table><br /><br /><table border="0" cellpadding="0" cellspacing="0" width="630"><tbody><tr class="celltop"><td align="center" valign="middle" width="20%">Double-wall</td>
<td class="borderright" align="center" valign="middle" width="25%">BC flute<br /> Brown Carton</td>
<td class="borderright" align="center" valign="middle" width="25%">BC flute<br /> White Carton</td>
<td align="center" valign="middle" width="30%">BC flute<br /> Color Box</td>
</tr><tr class="cell1"><td style="color:#262626;" align="center" height="150" valign="middle" width="20%">Weakest<br /><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/06-04.png" alt="06-04.png" height="75" width="34" /><br /> Strongest</td>
<td class="borderright" align="center" height="150" valign="middle" width="25%">B=C<br /> B=B<br /> A=B<br /> K=A<br /> K=K</td>
<td class="borderright" align="center" height="150" valign="middle" width="25%">W=B<br /> ↓<br /> W=A<br /> ↓<br /> W=K</td>
<td align="center" height="150" valign="middle" width="30%">300G CCNB +3B+3B<br /> ↓<br /> 300G CCNB +3A+3A<br /> ↓<br /> 300G CCNB +3K+3K</td>
</tr></tbody></table><br /><br /><table border="0" cellpadding="0" cellspacing="0" width="630"><tbody><tr class="celltop"><td align="center" valign="middle" width="20%">Three-wall</td>
<td class="borderright" align="center" valign="middle" width="25%">AAC flute<br /> Brown Carton</td>
<td class="borderright" bgcolor="#FFFFFF" align="center" valign="middle" width="25%"></td>
<td bgcolor="#FFFFFF" align="center" valign="middle" width="30%"></td>
</tr><tr class="cell1"><td style="color:#262626;" align="center" height="150" valign="middle" width="20%">Weakest<br /><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/images/info/06-04.png" alt="06-04.png" height="75" width="34" /><br /> Strongest</td>
<td class="borderright" align="center" height="150" valign="middle" width="25%">A33B33B<br /> A33A33A<br /> K33A33A<br /> K33K33K</td>
<td class="borderright" bgcolor="#FFFFFF" align="center" height="150" valign="middle" width="25%"></td>
<td bgcolor="#FFFFFF" align="center" height="150" valign="middle" width="30%"></td>
</tr></tbody></table></div></div>



<div id="14"></div>
<br/><br/>
<div class="h5">AQL</div>

<div id="info02">

	
<p>Acceptance sampling is a compromise between not doing any inspection at all and 100% inspection.</p>
<p>This international quality control standards clearly defines the number of samples to be drawn for inspection from a given lot or consignment. It also suggests the maximum number of defective items allowed in the sample size.</p>

<span class="highblk">Associated with the AQL, here is a confidence statement you can make:</span>
<p>If the lot passes the sampling plan, you can state with 95% confidence that the quality level of the lot is equal to or better than the AQL (i.e., the defective rate of the lot &lt; AQL).</p>
<p>On the other hand, if the lot fails the sampling plan, you can state with 95% confidence that the quality level of the lot is worse than the AQL. </p>
<p class="highblk">Unless otherwise instructed, ASIAPACK uses the Single Sampling Plan Normal Level II</p>
<p>This is generally the common requirement for consumer products manufactured in China.</p>
<p><span class="highblk">Critical defects</span>: no critical defect is accepted</p>
<p><span class="highblk">Major defects</span>: AQL 2.5</p>
<p><span class="highblk">Minor defects</span>: AQL 4.0</p>
<p> </p>
<span class="h5" style="color:#7fc249;">Critical defects, major defects and minor defects</span>

<p>Defects detected during visual inspection are classified within 3 categories:</p>
<p><span class="highblk">Critical</span>: likely to result in unsafe condition or contravene mandatory regulation</p>
<p><span class="highblk">Major</span>: reduces the usability of the product or is an obvious appearance defect</p>
<p><span class="highblk">Minor</span>: doesn't reduce the usability of the product, but is a defect beyond the defined quality standard.</p>


<p class="highblk">Customers can specify what points are minor, major or critical in a checking-list together with the inspection criteria and product specification.</p>
<p>We use the AQL table to calculate the number of sample drawn depending on shipment Quantity.</p>
<p>The required sample size and maximum defects allowed will be shown in the following:</p>

	<div class="table-container">
<table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td width="150"> </td>
<td width="139"> </td>
<td colspan="6" class="cellgreen" align="center">Accept Quality Levels - AQL Level II</td>
</tr><tr class="celltop"><td class="borderright" width="180">Lot size</td>
<td class="borderright" width="139">Sample size</td>
<td class="padset">0.65</td>
<td class="padset">1</td>
<td class="padset">1.5</td>
<td class="padset"><center><strong>Max defects<br />Major<br />2.5</strong></center></td>
<td class="padset"><center><strong>Max defects<br />Minor<br />4</strong></center></td>
<td class="padset">6.5</td>
</tr><tr class="cell1"><td class="borderright" width="170">151 - 280</td>
<td class="borderright" width="149">32</td>
<td class="padset">1</td>
<td class="padset">1</td>
<td class="padset">1</td>
<td class="padset"><strong>2</strong></td>
<td class="padset"><strong>3</strong></td>
<td class="padset">5</td>
</tr><tr class="cell2"><td class="borderright" width="170">281 - 500</td>
<td class="borderright" width="149">50</td>
<td class="padset">1</td>
<td class="padset">1</td>
<td class="padset">2</td>
<td class="padset"><strong>3</strong></td>
<td class="padset"><strong>5</strong></td>
<td class="padset">7</td>
</tr><tr class="cell1"><td class="borderright" width="170">501 - 1200</td>
<td class="borderright" width="149">80</td>
<td class="padset">1</td>
<td class="padset">2</td>
<td class="padset">3</td>
<td class="padset"><strong>5</strong></td>
<td class="padset"><strong>7</strong></td>
<td class="padset">10</td>
</tr><tr class="cell2"><td class="borderright" width="170">1201 - 3200</td>
<td class="borderright" width="149">125</td>
<td class="padset">2</td>
<td class="padset">3</td>
<td class="padset">5</td>
<td class="padset"><strong>7</strong></td>
<td class="padset"><strong>10</strong></td>
<td class="padset">14</td>
</tr><tr class="cell1"><td class="borderright" width="170">3201 - 10000</td>
<td class="borderright" width="149">200</td>
<td class="padset">3</td>
<td class="padset">5</td>
<td class="padset">7</td>
<td class="padset"><strong>10</strong></td>
<td class="padset"><strong>14</strong></td>
<td class="padset">21</td>
</tr><tr class="cell2"><td class="borderright" width="170">10001 - 35000</td>
<td class="borderright" width="149">315</td>
<td class="padset">5</td>
<td class="padset">7</td>
<td class="padset">10</td>
<td class="padset"><strong>14</strong></td>
<td class="padset"><strong>21</strong></td>
<td class="padset">21</td>
</tr><tr class="cell1"><td class="borderright" width="170">35001 - 150000</td>
<td class="borderright" width="149">500</td>
<td class="padset">7</td>
<td class="padset">10</td>
<td class="padset">14</td>
<td class="padset"><strong>21</strong></td>
<td class="padset"><strong>21</strong></td>
<td class="padset">21</td>
</tr><tr class="cell2"><td class="borderright" width="170">150001 - 500000</td>
<td class="borderright" width="149">800</td>
<td class="padset">10</td>
<td class="padset">14</td>
<td class="padset">21</td>
<td class="padset"><strong>21</strong></td>
<td class="padset"><strong>21</strong></td>
<td class="padset">21</td>
</tr><tr class="cell1"><td class="borderright" width="170">&gt; 500000</td>
<td class="borderright" width="149">1,250</td>
<td class="padset">14</td>
<td class="padset">21</td>
<td class="padset">21</td>
<td class="padset"><strong>21</strong></td>
<td class="padset"><strong>21</strong></td>
<td class="padset">21</td>
</tr></tbody></table>

</div>




<p> </p>
<p>Samples are randomly drawn from the square root of cartons (√(total number of cartons). i.e. If 100 cartons, you need to select samples from 10 different cartons, and randomly within those cartons.</p>
<p>We use the AQL table to calculate the number of sample drawn depending on shipment Quantity.</p>
<p><span style="color:#7fc229;">Example 1</span></p>
<p></p>
<p>If the lot has 200 pieces, <span style="color:#29abe2;">32 samples</span> should be randomly taken out,</p>
<p>If less than 3 minor defects found and less than 2 Major defect found, <span class="highblk">LOT ACCEPTED</span></p>
<p>If more than 3 minor defects found or more than 2 Major defect found, <span class="highblk">LOT REJECTED</span></p>

<p> </p>
<p><span style="color:#7fc229;">Example 2</span></p>
<p></p>
<p>If the lot has 10.000 pieces, <span style="color:#ed1e79;">200 samples</span> should be randomly taken out,</p>
<p>If less than 14 minor defects found and less than 10 Major defect found, <span class="highblk">LOT ACCEPTED</span></p>
<p>If more than 14 minor defects found or more than 10 Major defect found, <span class="highblk">LOT REJECTED</span></p>
</div></div>
		</div>


	</div>

	<br><br><br><br><br><br>
	
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['cms']->value->content;?>


<?php }?>

<?php } elseif (isset($_smarty_tpl->tpl_vars['cms_category']->value)) {?>
	<div class="block-cms">
		<h1><a href="<?php if ($_smarty_tpl->tpl_vars['cms_category']->value->id==1) {?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['cms_category']->value->id,$_smarty_tpl->tpl_vars['cms_category']->value->link_rewrite);?>
<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></h1>
		<?php if ($_smarty_tpl->tpl_vars['cms_category']->value->description) {?>
			<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_category']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</p>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['sub_category']->value)&&!empty($_smarty_tpl->tpl_vars['sub_category']->value)) {?>	
			<p class="title_block"><?php echo smartyTranslate(array('s'=>'List of sub categories in %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl);?>
</p>
			<ul class="bullet list-group">
				<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
					<li>
						<a class="list-group-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_cms_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
					</li>
				<?php } ?>
			</ul>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['cms_pages']->value)&&!empty($_smarty_tpl->tpl_vars['cms_pages']->value)) {?>
		<p class="title_block"><?php echo smartyTranslate(array('s'=>'List of pages in %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl);?>
</p>
			<ul class="bullet list-group">
				<?php  $_smarty_tpl->tpl_vars['cmspages'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmspages']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmspages']->key => $_smarty_tpl->tpl_vars['cmspages']->value) {
$_smarty_tpl->tpl_vars['cmspages']->_loop = true;
?>
					<li>
						<a class="list-group-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['cmspages']->value['id_cms'],$_smarty_tpl->tpl_vars['cmspages']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmspages']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
					</li>
				<?php } ?>
			</ul>
		<?php }?>
	</div>
<?php } else { ?>
	<div class="alert alert-danger">
		<?php echo smartyTranslate(array('s'=>'This page does not exist.'),$_smarty_tpl);?>

	</div>
<?php }?>

</div>
<!--add by Christine-->
<div id="footerID"></div>
<br />


<?php if (isset($_GET['ad'])&&$_GET['ad']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'ad')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ad'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['base_dir']->value).($_GET['ad']), ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ad'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php if (isset($_GET['adtoken'])&&$_GET['adtoken']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'adtoken')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'adtoken'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'adtoken'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
<?php }} ?>
