<?php $this->start('main'); ?>
<?php echo $this->Html->css('linecard'); ?>
<div class="linecards index">
	<div class="content-header">
	<h2><?php echo __('Vendors'); ?></h2>
	</div>
	
	<div class="main" >
	<div id="vendors">
	<?php
	foreach ($linecards as $linecard): if($linecard['Linecard']['display']=='0'){continue;}?>
	<?php $image = $_SERVER['DOCUMENT_ROOT'] . '/app/webroot/img/man_logos/'.strtolower($linecard['Linecard']['line']).'.jpg';?>
	<?php if(file_exists($image)){ ?>
	<a href="/linecard/view/<?php echo $linecard['Linecard']['id']; ?>" class="vendor-logo">
                        <img src="/img/man_logos/<?php echo strtolower($linecard['Linecard']['line']); ?>.jpg" width="120px" style="padding:.25em" align="center" border="0">
                </a>
	<?php }else{ ?>
	<?php } ?>
<?php endforeach; ?>
	</div>
	</div>
</div>
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>