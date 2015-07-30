<?php $this->start('main'); ?>
<?php echo $this->Html->css('rebate'); ?>
<div class="rebates index">
	<div class="content-header">
	<h2><?php echo __('Rebates'); ?></h2>
    <img src="/img/REBATE-Banner.jpg">
	</div>
	
	<div class="main" >
	<div id="vendors">
    <h3><a href="/admin/rebates/add">ADD REBATE</a></h3>
	<?php
	foreach ($rebates as $rebate): ?>    
	<a href="<?php echo $rebate['Rebate']['url']; ?>" class="vendor-logo">
    <?php print' <a href="/admin/rebates/edit/'.$rebate['Rebate']['id'].'/">'.'edit</a>' ?>
                        <img src="/img/rebates/<?php echo ($rebate['Rebate']['image']); ?>" style="padding:.25em" align="center" border="0">
                </a>
<?php endforeach; ?>
	</div>
	</div>
</div>
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>