<div class="linecards form">
<?php echo $this->Form->create('Linecard'); ?>
	<fieldset>
		<legend><?php echo __('Add Linecard'); ?></legend>
	<?php
		echo $this->Form->input('line');
		echo $this->Form->input('dci_line');
		echo $this->Form->input('name');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Linecards'), array('action' => '../admin/linecard')); ?></li>
	</ul>
</div>
