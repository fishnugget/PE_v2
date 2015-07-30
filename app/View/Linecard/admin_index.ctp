<?php $this->start('main'); ?>
<div class="main">
	<a name="top"></a>
	<div class="paging">
		SELECT BY LINE:  
	<?php
		foreach($letters as $key=>$value):
	?>
		<?php echo "<a href=#".strtoupper($value).">".strtoupper($value)."</a>"; ?>
	<?php endforeach; ?>
	</div>
    <strong><a href="../linecard/add">ADD LINE</a></strong>
	<table id="linecards" cellpadding="10px" align="center" cellspacing="0">
	<tbody><tr class="header">
		<td style="width:10%; padding:1em">Line</td>
	    <td style="width:20%; padding:1em">Name</td>
	    <td style="width:40%; padding:1em">Website</td>
	</tr>
	<?php
	$index = '';
	foreach ($linecards as $linecard): 
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
		<td style="width:20%; border-bottom:1px #000000 solid; border-right:1px #000000 dashed"><?php echo strtoupper($linecard['Linecard']['line']); print' <a href="http://stage.pedistributors.com/linecard/edit/'.$linecard['Linecard']['id'].'/">'.'edit</a>' ?></td>
	    <td style="width:20%; border-bottom:1px #000000 solid; border-right:1px #000000 dashed"><?php echo ucfirst($linecard['Linecard']['name']); ?></td>
	    <td style="width:40%; border-bottom:1px #000000 solid"><a href="<?php echo strtolower($linecard['Linecard']['url']); ?>" target="_blank" style="color:#0000FF; margin:0 0 0 .5em"><?php echo strtolower($linecard['Linecard']['url']); ?></a></td>
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