<?php $this->start('main'); ?>
<div class="main">
	<div class="heading">Featured Vendor Detail</div>
  		<img src="/img/man_logos/<?php echo strtolower($linecard['Linecard']['line']); ?>.jpg" style="background:#FFFFFF; border:1px #000000 solid; padding:2em; max-width:300px; float:left; clear: left;">
    
    <div style="float:left; clear: left; margin-left:.5em">
    	<div style="float:left; font-size:24px"><?php echo h($linecard['Linecard']['name']); ?></div>
    	<div style="float:left; clear:left; font-size:16px"></div>
			<div style="float:left; clear:left; font-size:14px"><a href="<?php echo h($linecard['Linecard']['url']); ?>" target="_blank">Website</a></div>
	</div>
</div>

<?php $this->end(); ?>
<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>
