<?php $this->start('main'); ?>
<?php echo $this->Html->css('form'); ?>
<?php echo $this->Html->css('register'); ?>

<div id="form">
<?php echo $this->Form->create('Employment', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Employment Application Form'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('city_state_zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('position_desired');		
		echo $this->Form->input('current_or_recent_employer');
		echo $this->Form->input ('current_title');
		echo $this->Form->input ('employed_from');
		echo $this->Form->input ('employed_to');
		echo $this->Form->input(
    'position_responsibilities',
    array('type' => 'textarea', 'escape' => false)
);
				echo $this->Form->input(
    'reason_for_leaving',
    array('type' => 'textarea', 'escape' => false)
);
		echo $this->Form->input ('referred_by');
						echo $this->Form->input(
    'cover_letter',
    array('type' => 'textarea', 'escape' => false)
);
		echo $this->Form->input('resume',array('type' => 'file'));
	?>
	</fieldset>
<input type="image" src="/img/submit.png" border="0" alt="Submit Form" style="width: 100px">
<?php echo $this->Form->end(); ?>
</div>

<!-- 
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Html->link(__('List Credits'), array('action' => 'index')); ?></li>
	</ul>
</div>
-->
<?php $this->end(); ?>
<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>