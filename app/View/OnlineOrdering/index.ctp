<div class="onlineOrderings index">
	<h2><?php echo __('Online Orderings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_number'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('company'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('address2'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_alt'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($onlineOrderings as $onlineOrdering): ?>
	<tr>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['id']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['email']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['customer_number']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['password']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['company']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['title']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['address']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['address2']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['city']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['state']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['zip']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['phone']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['phone_alt']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['fax']); ?>&nbsp;</td>
		<td><?php echo h($onlineOrdering['OnlineOrdering']['url']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $onlineOrdering['OnlineOrdering']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $onlineOrdering['OnlineOrdering']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $onlineOrdering['OnlineOrdering']['id']), null, __('Are you sure you want to delete # %s?', $onlineOrdering['OnlineOrdering']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Online Ordering'), array('action' => 'add')); ?></li>
	</ul>
</div>
