<br />
<div class="marketing form">
<?php echo $this->Form->create('Marketing', array('enctype' => 'multipart/form-data'));  ?>
	<fieldset>
		<legend><?php echo __('Update Marketing Preferences'); ?></legend>
	<?php
	echo $this->Form->hidden('userId', array(
    'value' => $user['BS'][0]
));
	echo $this->Form->hidden('custNum', array(
    'value' => $user['A6'][0]
));
		echo $this->Form->input('email');
		echo $this->Form->checkbox('p', array('hiddenField' => false));
		echo $this->Form->checkbox('t', array('hiddenField' => false));
		echo $this->Form->checkbox('e', array('hiddenField' => false));
		echo $this->Form->checkbox('s', array('hiddenField' => false));
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
