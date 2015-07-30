<?php $this->start('main'); ?>
<?php echo $this->Html->script('search'); ?>
<?php // echo $this->Element('membernav'); ?>

<?php if(!empty($cart)): ?>
	<div class="main">
    	<div class="text-box">
    		<div class="titles">Your shopping cart</div>
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
    <p class="titles">Shopping Cart Total: $<?php echo $cart['total']; ?></p>
	<a href="/cart/checkout"><img src="/img/buttons/checkout.png" style="margin-right:1em" border="0"></a><a href="/cart/clear"><img src="/img/buttons/cancel_order.png" border="0" style="margin-left:.25em"></a>
	
	</div>		
    	</div>
	</div>
	
<?php endif; //if($_SERVER['REMOTE_ADDR'] == '64.16.163.165'){print_r(get_defined_vars());}?>
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>