<div class="credits form">
<?php echo $this->Form->create('Credit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Credit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('business_name');
		echo $this->Form->input('tax_id');
		echo $this->Form->input('terms');
		echo $this->Form->input('website');
		echo $this->Form->input('referer');
		echo $this->Form->input('business_years');
		echo $this->Form->input('buyer_name');
		echo $this->Form->input('po_req');
		echo $this->Form->input('address_street');
		echo $this->Form->input('address_city');
		echo $this->Form->input('address_state');
		echo $this->Form->input('address_zip');
		echo $this->Form->input('address_phone');
		echo $this->Form->input('address_fax');
		echo $this->Form->input('email');
		echo $this->Form->input('property_value');
		echo $this->Form->input('mortgage');
		echo $this->Form->input('mortgagee');
		echo $this->Form->input('monthly_sales');
		echo $this->Form->input('bank_name');
		echo $this->Form->input('bank_account');
		echo $this->Form->input('bank_contact');
		echo $this->Form->input('bank_phone');
		echo $this->Form->input('bank_fax');
		echo $this->Form->input('owner_name');
		echo $this->Form->input('owner_address');
		echo $this->Form->input('owner_city');
		echo $this->Form->input('owner_state');
		echo $this->Form->input('owner_zip');
		echo $this->Form->input('owner_phone');
		echo $this->Form->input('owner_social');
		echo $this->Form->input('partner_name');
		echo $this->Form->input('partner_address');
		echo $this->Form->input('partner_city');
		echo $this->Form->input('partner_state');
		echo $this->Form->input('partner_zip');
		echo $this->Form->input('partner_phone');
		echo $this->Form->input('partner_social');
		echo $this->Form->input('trade1_name');
		echo $this->Form->input('trade1_city');
		echo $this->Form->input('trade1_state');
		echo $this->Form->input('trade1_zip');
		echo $this->Form->input('trade1_acct');
		echo $this->Form->input('trade1_phone');
		echo $this->Form->input('trade1_fax');
		echo $this->Form->input('trade2_name');
		echo $this->Form->input('trade2_city');
		echo $this->Form->input('trade2_state');
		echo $this->Form->input('trade2_zip');
		echo $this->Form->input('trade2_acct');
		echo $this->Form->input('trade2_phone');
		echo $this->Form->input('trade2_fax');
		echo $this->Form->input('trade3_name');
		echo $this->Form->input('trade3_city');
		echo $this->Form->input('trade3_state');
		echo $this->Form->input('trade3_zip');
		echo $this->Form->input('trade3_acct');
		echo $this->Form->input('trade3_phone');
		echo $this->Form->input('trade3_fax');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Credit.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Credit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Credits'), array('action' => 'index')); ?></li>
	</ul>
</div>
