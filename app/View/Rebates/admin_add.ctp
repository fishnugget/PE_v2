<br />
<div class="rebates form">
<?php echo $this->Form->create('Rebate', array('enctype' => 'multipart/form-data'));  ?>
	<fieldset>
		<legend><?php echo __('Add Rebate'); ?></legend>
	<?php
		echo $this->Form->input('line');
		echo $this->Form->input('image', array('type' => 'file'));
		//echo $this->Form->file('image_file');
		//echo $this->Form->input('image');echo '(ie. "rebate1.jpg", upload "rebate1.jpg" to /webroot/img/rebates)';
		echo $this->Form->input('url'); echo '(ie. http://edelbrock.com/rebateinfo)';
		echo $this->Form->input('startDate');
		echo $this->Form->input('endDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rebates'), array('action' => '/')); ?></li>
	</ul>
</div>
