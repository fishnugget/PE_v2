<div class="linecards form">
<?php echo $this->Form->create('Employment'); ?>
	<fieldset>
		<legend><?php echo __('Add Job'); ?></legend>
	<?php
		echo $this->Form->input('location');
		echo $this->Form->input('pt_ft', array(
    		'separator' => '--separator--',
    		'options' => array('FT', 'PT')
		));		
		echo $this->Form->input('position');
		echo $this->Form->input('position_description');
		echo $this->Form->input('skills_needed');
		echo $this->Form->input('education_requirements');
		echo $this->Form->input('compensation');
		echo $this->Form->input('display', array(
    		'before' => '--before--',
    		'after' => '--after--',
    		'between' => '--between---',
    		'separator' => '--separator--',
    		'options' => array('1', '0')
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Show PE Job Listings'), array('action' => '/')); ?></li>
	</ul>
</div>
