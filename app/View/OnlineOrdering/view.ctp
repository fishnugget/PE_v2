<div class="onlineOrderings view">
<h2><?php  echo __('Online Ordering'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Number'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['customer_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address2'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['address2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Alt'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['phone_alt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($onlineOrdering['OnlineOrdering']['url']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Online Ordering'), array('action' => 'edit', $onlineOrdering['OnlineOrdering']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Online Ordering'), array('action' => 'delete', $onlineOrdering['OnlineOrdering']['id']), null, __('Are you sure you want to delete # %s?', $onlineOrdering['OnlineOrdering']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Online Orderings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Online Ordering'), array('action' => 'add')); ?> </li>
	</ul>
</div>
