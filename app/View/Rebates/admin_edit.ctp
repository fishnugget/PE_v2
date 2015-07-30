<br />
<div class="rebates form">
<?php echo $this->Form->create('Rebate'); ?>
	<fieldset>
		<legend><?php echo __('Edit Rebate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('line');
		echo '<img src="/img/rebates/'.$this->Form->value('Rebate.image').'" width="100px">';
		echo $this->Form->input('image', array('type' => 'file'));
		//echo $this->Form->input('image');
		echo $this->Form->input('url');
		echo $this->Form->input('startDate');
		echo $this->Form->input('endDate');
		echo $this->Form->input('display');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rebate.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Rebate.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rebates'), array('action' => '/')); ?></li>
	</ul>
</div>
