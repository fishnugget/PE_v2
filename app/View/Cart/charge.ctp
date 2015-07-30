<?php $this->start('main'); 
if(isset($payment)){debug($payment);}?>

<?php echo $this->Html->css('form'); ?>
<?php // echo $this->Element('membernav'); ?>
	<div class="main">
    	<div class="text-box">
    	<table id="cart-table">
<tbody>
<tr>
<td>Details</td><td>Line Code</td><td>Part Number</td><td>Description</td><td>Qty.<br>
Available</td><td>Retail</td><td class="hide_price">Your Price</td><td class="hide_price">Tru-Blu<br>
Jobber</td><td>Order</td>
</tr>
<form method="post" action="/cart/add">
<input type="hidden" name="action" value="update">
<?php foreach($cart['items'] as $key => $part): ?>
		<tr>
		<td style="font-size:9px; line-height:100%"></td>
		<td><?php echo $part['Line']; ?></td>
		<td style="text-align:left"><?php echo $part['PartNumber']; ?></td>
		<td style="text-align:left"><?php echo $part['Description']; ?></td>
		<td><?php echo $part['QtyAvailable']; ?></td>
		<td><?php echo $part['Retail']; ?></td>
		<td class="hide_price"><?php echo $part['YourPrice']; ?></td>
		<td class="hide_price"><?php echo $part['Jobber'];?></td>
		<td><input type="text" size="2" name="parts[<?php echo $part['FullPart']; ?>]" value="<?php echo $part['qty']; ?>" style="text-align:center" class="part_qty">&nbsp;<input type="image" src="/img/membernav/256-2.png" name="parts[<?php echo $part['FullPart']; ?>]" value="0" style="vertical-align:text-bottom;" value="Submit" width="20px"></td>
		</tr>
<?php endforeach; ?>

<tr><td colspan="9" align="right"><input type="image" src="/img/buttons/apply.png" style="margin:1em 0 0 1em;" value="Submit"></form></td></tr>
    		


</tbody></table>
    		<div id="cart-total">
    			<p class="titles">Shopping Cart Total: $<?php echo money_format('%i', ($cart['total'] + $cart['Shipping']['charge'])); ?></p>
			</div>		
    	</div>
	<div class="text-box" id="billingInfo">
		<hr>
		<div class="titles">Billing</div>
			<?php echo $this->Form->create('Billing'); ?>
			<?php echo $this->Form->input('billing_name', array('label' => 'Billing Name')); ?>
			<?php echo $this->Form->input('address1', array('label' => 'Billing Address')); ?>
			<?php echo $this->Form->input('address2', array('label' => 'Apt #/Suite #/etc...')); ?>
			<?php echo $this->Form->input('city', array('label' => 'Billing City')); ?>
			<?php echo $this->Form->input('state', array('options' => $states, 'label' => 'Billing State')); ?>
			<?php echo $this->Form->input('zip', array('label' => 'Billing Zip Code')); ?>
			<?php echo $this->Form->input('billing_phone', array('label' => 'Billing Phone')); ?>
			<?php echo $this->Form->input('card_num', array('label' => 'Credit Card #')); ?>
			<?php echo $this->Form->input('ccv', array('label' => 'CCV #')); ?>
			<label for="data[Billing][exp_month][month]">Expiration Month</label><?php echo $this->Form->month('exp_month', array('empty' => __('-- Select --'))); ?>
			<?php echo $this->Form->input('exp_year', array('options' => array('empty' => __('-- Select --'), '2014' => '2014', '2015' => '2015', '2016' => '2016', '2017' => '2017', '2018' => '2018', '2019' => '2019', '2020' => '2020', '2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024', '2025' => '2025'), 'label' => 'Expiration Year')); ?>
			<?php echo $this->Form->submit('submit_order', array('type'=>'image','src' => '/img/buttons/submit_order.png'));  ?>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>