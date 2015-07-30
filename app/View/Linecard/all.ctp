<?php $this->start('main'); ?>
<script src="/js/lazyload.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
    $("img.lazy").lazyload({
	threshold : 1000,
    effect : "fadeIn"
});
});
</script>
<script language="JavaScript">

function loadPage(list) {

  location.href=list.options[list.selectedIndex].value

}
</script>
<?php //if(!empty($user)): echo $this->Element('membernav'); endif;?>
<div class="main">
<div class="titles">P&E Distributors Linecard</div>
<p>We sell and stock hundreds of manufacturer brands. We strive to bring our customers only the hottest products on the market. The list below is broken down in alphabetical order. If you are looking for a specific vendor, please check to see if we offer it. You can also sort the list by product category by using the drop down menu shown below. Located beside each vendor's name is their corresponding P&amp;E line code and a link to their website.</p>
<p align="center"><form name="form1">VIEW BY CATEGORY:&nbsp;&nbsp;
  <select name="menu1" onChange="loadPage(this.form.elements[0])">
      <option <?php if(empty($type)){ echo "selected";}?> value="/linecard/all">ALL LINES</option>
      <option value="/linecard/all?type=T" <?php if($type == "T"){ echo "selected";}?>>Truck &amp; Diesel Accessories</option>
      <option value="/linecard/all?type=P" <?php if($type == "P"){ echo "selected";}?>>Performance Products &amp; Hard Parts</option>
      <option value="/linecard/all?type=AV" <?php if($type == "AV"){ echo "selected";}?>>Mobile Audio/Video/Security</option>
    </select>
</form></p><br />
	<a name="top"></a>
	<div class="paging">
		Jump to brands alphabetically:  
	<?php
		foreach($letters as $key=>$value):
	?>
		<?php echo "<a href=#".strtoupper($value).">".strtoupper($value)."</a>"; ?>
	<?php endforeach; ?>
	</div>
	<table id="linecards" cellpadding="10px" align="center" cellspacing="0">
	<tbody><tr class="header">
		<td style="width:10%; padding:1em">Line</td>
	    <td style="width:80%; padding:1em">Name</td>
	    <td style="width:10%; padding:1em">Website</td>
	</tr>
	<?php
	$index = '';
	foreach ($linecards as $linecard): if($linecard['Linecard']['display']=='0'){continue;}
		$letter = substr($linecard['Linecard']['name'], 0, 1);
	?>
	<?php if($index !== $letter): $index = $letter; ?>
		<tr><td colspan="3"><div class="letter"><a name="<?php echo $letter; ?>"></a><?php echo $letter; ?></div>
		<div class="paging">
		SELECT BY LINE:  
	<?php
		foreach($letters as $key=>$value):
	?>
		<?php echo "<a href=#".strtoupper($value).">".strtoupper($value)."</a>"; ?>
	<?php endforeach; ?>
		<a href="#top"> [BACK TO TOP] </a>
	</div>
	</td></tr>
	<?php endif; ?>
	<tr>
		<td style="width:20%; border-bottom:1px #000000 solid; border-right:1px #000000 dashed"><strong><?php echo strtoupper($linecard['Linecard']['line']); ?></strong><br />
        <center>
        <?php //ImageHelper: Image->resizedUrl should resize file or return file if it has already been resized
        $image = $this->Image->resizedUrl('/img/man_logos/'.strtolower($linecard['Linecard']['line']).'.jpg', 120, '');
		//echo $this->Html->image($image, array('alt' => $linecard['Linecard']['name']));
        ?>
        <img class="lazy" data-original="<?php echo $image; ?>" width="100" alt="<?php echo $linecard['Linecard']['line'];?>"/>
        <noscript><img src="<?php echo $image; ?>; ?>.jpg" width="100" alt="<?php echo $linecard['Linecard']['line'];?>"/></noscript>
        </center></td>
	    <td style="width:20%; border-bottom:1px #000000 solid; border-right:1px #000000 dashed"><?php echo ucfirst($linecard['Linecard']['name']); ?></td>
	    <td style="width:40%; border-bottom:1px #000000 solid"><a href="<?php echo strtolower($linecard['Linecard']['url']); ?>" target="_blank" style="color:#0000FF; margin:0 0 0 .5em">Website</a></td>
	</tr>
	<?php endforeach; ?>
	</tbody></table>
	<div class="paging">
		SELECT BY LINE:  
	<?php
		foreach($letters as $key=>$value):
	?>
		<?php echo "<a href=#".strtoupper($value).">".strtoupper($value)."</a>"; ?>
	<?php endforeach; ?>
	</div>
</div>
<?php $this->end(); ?>
<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>