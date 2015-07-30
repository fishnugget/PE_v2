<?php $this->start('main'); ?>
<script language="JavaScript">

function loadPage(list) {

  location.href=list.options[list.selectedIndex].value

}
</script>
<?php if(!empty($user)): echo $this->Element('membernav'); endif;?>
<div class="main">
<p align="center"><form name="form1">VIEW:&nbsp;&nbsp;
  <select name="menu1" onChange="loadPage(this.form.elements[0])">
      <option <?php if(empty($type)){ echo "selected";}?> value="/rebate/all">ALL LINES</option>
      <option value="/rebate/all?type=T" <?php if($type == "T"){ echo "selected";}?>>Truck &amp; Diesel Accessories</option>
      <option value="/rebate/all?type=P" <?php if($type == "P"){ echo "selected";}?>>Performance Products &amp; Hard Parts</option>
      <option value="/rebate/all?type=AV" <?php if($type == "AV"){ echo "selected";}?>>Mobile Audio/Video/Security</option>
    </select>
</form></p><br />
	<a name="top"></a>
	<div class="paging">
		SELECT BY LINE:  
	<?php
		foreach($letters as $key=>$value):
	?>
		<?php echo "<a href=#".strtoupper($value).">".strtoupper($value)."</a>"; ?>
	<?php endforeach; ?>
	</div>
	<table id="rebates" cellpadding="10px" align="center" cellspacing="0">
	<tbody><tr class="header">
		<td style="width:10%; padding:1em">Line</td>
	    <td style="width:80%; padding:1em">Name</td>
	    <td style="width:10%; padding:1em">Website</td>
	</tr>
	<?php
	$index = '';
	foreach ($rebates as $rebate): if($rebate['Rebate']['display']=='0'){continue;}
		$letter = substr($rebate['Rebate']['name'], 0, 1);
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
		<td style="width:20%; border-bottom:1px #000000 solid; border-right:1px #000000 dashed"><strong><?php echo strtoupper($rebate['Rebate']['line']); ?></strong><br /><center><img src="/img/man_logos/<?php echo strtolower($rebate['Rebate']['line']); ?>.jpg" width="80"></center></td>
	    <td style="width:20%; border-bottom:1px #000000 solid; border-right:1px #000000 dashed"><?php echo ucfirst($rebate['Rebate']['name']); ?></td>
	    <td style="width:40%; border-bottom:1px #000000 solid"><a href="<?php echo strtolower($rebate['Rebate']['url']); ?>" target="_blank" style="color:#0000FF; margin:0 0 0 .5em">Website</a></td>
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