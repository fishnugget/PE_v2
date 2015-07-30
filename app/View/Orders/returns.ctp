<?php $this->start('main'); 
	//debug($order);
echo $this->Element('membernav'); ?>
<?php echo $this->Html->css('form'); ?>
<?php echo $this->Html->css('register'); ?>

<div class="orderings form">
<?php echo $this->Form->create('Returns'); ?>
	<fieldset>
		<legend><?php echo __('RGA Request Form'); ?></legend>
	<?php
	echo $this->Form->input('part_number');
	/*
		echo $this->Form->input('email');
		echo $this->Form->input('customer_number');
		echo $this->Form->input('choose_a_password');
		echo $this->Form->input('company_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('job_title');
		*/
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