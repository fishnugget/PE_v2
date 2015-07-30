<div class="credits index">
	<h2><?php echo __('Credits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('business_name'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_id'); ?></th>
			<th><?php echo $this->Paginator->sort('terms'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th><?php echo $this->Paginator->sort('referer'); ?></th>
			<th><?php echo $this->Paginator->sort('business_years'); ?></th>
			<th><?php echo $this->Paginator->sort('buyer_name'); ?></th>
			<th><?php echo $this->Paginator->sort('po_req'); ?></th>
			<th><?php echo $this->Paginator->sort('address_street'); ?></th>
			<th><?php echo $this->Paginator->sort('address_city'); ?></th>
			<th><?php echo $this->Paginator->sort('address_state'); ?></th>
			<th><?php echo $this->Paginator->sort('address_zip'); ?></th>
			<th><?php echo $this->Paginator->sort('address_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('address_fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('property_value'); ?></th>
			<th><?php echo $this->Paginator->sort('mortgage'); ?></th>
			<th><?php echo $this->Paginator->sort('mortgagee'); ?></th>
			<th><?php echo $this->Paginator->sort('monthly_sales'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_name'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_account'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_fax'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_name'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_address'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_city'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_state'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_zip'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_social'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_name'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_address'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_city'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_state'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_zip'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_social'); ?></th>
			<th><?php echo $this->Paginator->sort('trade1_name'); ?></th>
			<th><?php echo $this->Paginator->sort('trade1_city'); ?></th>
			<th><?php echo $this->Paginator->sort('trade1_state'); ?></th>
			<th><?php echo $this->Paginator->sort('trade1_zip'); ?></th>
			<th><?php echo $this->Paginator->sort('trade1_acct'); ?></th>
			<th><?php echo $this->Paginator->sort('trade1_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('trade1_fax'); ?></th>
			<th><?php echo $this->Paginator->sort('trade2_name'); ?></th>
			<th><?php echo $this->Paginator->sort('trade2_city'); ?></th>
			<th><?php echo $this->Paginator->sort('trade2_state'); ?></th>
			<th><?php echo $this->Paginator->sort('trade2_zip'); ?></th>
			<th><?php echo $this->Paginator->sort('trade2_acct'); ?></th>
			<th><?php echo $this->Paginator->sort('trade2_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('trade2_fax'); ?></th>
			<th><?php echo $this->Paginator->sort('trade3_name'); ?></th>
			<th><?php echo $this->Paginator->sort('trade3_city'); ?></th>
			<th><?php echo $this->Paginator->sort('trade3_state'); ?></th>
			<th><?php echo $this->Paginator->sort('trade3_zip'); ?></th>
			<th><?php echo $this->Paginator->sort('trade3_acct'); ?></th>
			<th><?php echo $this->Paginator->sort('trade3_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('trade3_fax'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($credits as $credit): ?>
	<tr>
		<td><?php echo h($credit['Credit']['id']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['business_name']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['tax_id']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['terms']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['website']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['referer']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['business_years']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['buyer_name']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['po_req']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['address_street']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['address_city']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['address_state']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['address_zip']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['address_phone']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['address_fax']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['email']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['property_value']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['mortgage']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['mortgagee']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['monthly_sales']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['bank_name']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['bank_account']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['bank_contact']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['bank_phone']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['bank_fax']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['owner_name']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['owner_address']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['owner_city']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['owner_state']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['owner_zip']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['owner_phone']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['owner_social']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['partner_name']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['partner_address']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['partner_city']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['partner_state']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['partner_zip']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['partner_phone']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['partner_social']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade1_name']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade1_city']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade1_state']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade1_zip']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade1_acct']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade1_phone']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade1_fax']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade2_name']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade2_city']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade2_state']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade2_zip']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade2_acct']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade2_phone']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade2_fax']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade3_name']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade3_city']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade3_state']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade3_zip']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade3_acct']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade3_phone']); ?>&nbsp;</td>
		<td><?php echo h($credit['Credit']['trade3_fax']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $credit['Credit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $credit['Credit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $credit['Credit']['id']), null, __('Are you sure you want to delete # %s?', $credit['Credit']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Credit'), array('action' => 'add')); ?></li>
	</ul>
</div>
