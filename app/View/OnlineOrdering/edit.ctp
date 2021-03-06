<div class="onlineOrderings form">
<?php echo $this->Form->create('OnlineOrdering'); ?>
	<fieldset>
		<legend><?php echo __('Edit Online Ordering'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('email');
		echo $this->Form->input('customer_number');
		echo $this->Form->input('password');
		echo $this->Form->input('company');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('title');
		echo $this->Form->input('address');
		echo $this->Form->input('address2');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('phone_alt');
		echo $this->Form->input('fax');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OnlineOrdering.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OnlineOrdering.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Online Orderings'), array('action' => 'index')); ?></li>
	</ul>
</div>
