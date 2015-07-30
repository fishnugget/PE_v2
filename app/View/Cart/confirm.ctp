<?php $this->start('main'); ?>
<?php // echo $this->Element('membernav'); ?>
	<div class="main">
    <img src="/img/progressbar/step2.jpg">
    	<div class="text-box">
    		<div class="titles">Your shopping cart</div>
    		<table id="confirm-table">
<tbody>
<tr>
<td>Line Code</td><td>Part Number</td><td>Description</td><td>Qty.<br>
Available</td><td>Retail</td><td class="hide_price">Your Price</td><td class="hide_price">Tru-Blu<br>
Jobber</td><td>Order</td>
</tr>
<?php foreach($cart['items'] as $key => $part): ?>
		<tr>
		<td><?php echo $part['Line']; ?></td>
		<td><?php echo $part['PartNumber']; ?></td>
		<td style="text-align:left"><?php echo $part['Description']; ?></td>
        <td><?php echo $part['QtyAvailable']; ?></td>
		<td><?php echo $part['Retail']; ?></td>
		<td class="hide_price"><?php echo $part['YourPrice']; ?></td>
		<td class="hide_price"><?php echo $part['Jobber']; ?></td>
		<td><?php echo $part['qty']; ?></td>
		</tr>
<?php endforeach; ?>	
    		


</tbody></table>
    <div id="cart-total">
    	<p class="titles">Shopping Cart Total: $<?php echo $cart['total']; ?></p>	
	</div>		
    	</div>

	<div class="text-box" style="clear: none; width: 350px;">

    	<ul style="list-style-type: none;" class="address">
    	<li style="font-size: 18px;">Bill To:</li>
    	<li>Address: <?php echo $user['A1'][0]; ?></li>
    	<?php if(!empty($user['A2'][0])): ?>
    	<li>Suite, Unit, or Apt#: <?php echo $user['A2'][0]; ?></li>
    	<?php endif; ?>
		<li>City: <?php echo $user['A3'][0]; ?></li>
		<li>State: <?php echo $user['A3'][1]; ?></li>
		<li>Zip: <?php echo $user['A3'][2]; ?></li>
		</ul>
    </div>
    
    <div class="text-box" style="clear:none; width: 350px;">
		<ul style="list-style-type: none;" class="address">
    	<li style="font-size: 18px;">Ship To:</li>
    	<?php if(!empty($cart['Shipping']['careof'])): ?>
    	<li>c/o: <?php echo $cart['Shipping']['careof']; ?></li>
    	<?php endif; ?>
    	<li>Address: <?php echo $cart['Shipping']['address1']; ?></li>
    	<?php if(!empty($user['A2'][0])): ?>
    	<li>Suite, Unit, or Apt#: <?php echo $cart['Shipping']['address2']; ?></li>
    	<?php endif; ?>
		<li>City: <?php echo $cart['Shipping']['city']; ?></li>
		<li>State: <?php echo $cart['Shipping']['state']; ?></li>
		<li>Zip: <?php echo $cart['Shipping']['zip']; ?></li>
		</ul>
    </div>

	<?php if($user['TM'][0] !== 'CREDIT CARD'){//CC Customer?>
    	<div style="float:left; clear:both; margin:1em 0 0 0">
         <a href="/cart"><img src="/img/buttons/make_changes.png" border="0"></a>
         <a href="/cart/placeorder" id="place-order"><img src="/img/buttons/submit_order.png"></a>
        </div>
	<?php }else{?>
    <div style="float:left; clear:both; margin:1em 0 0 0">
    <form method="post" action="/cart/placeorder">
        
        <ul style="list-style-type: none;background-color:#66FF66;">
        <input class="address-radio my-address" type="checkbox" name="which_cc" value="onfile" required value="1"><?php echo(!empty($CC['card']))?"Bill CC On File:".$CC['card']."<br /><ul><li><strong>AN ADDITIONAL $30 WILL BE HELD ON YOUR CARD FOR SHIPPING COST.<li>SHIP CHARGE WILL BE ADJUSTED (+/-) AT TIME OF SHIPPING.</strong></ul>":"<strong>NO CARD ON FILE, CALL SALESMAN</strong>";
        /*<li><input class="address-radio my-address" type="radio" name="which_cc" value="new">I want to use a different Credit Card.*/?>
        </ul>
        <a href="/cart/checkout"><img src="/img/buttons/make_changes.png" border="0"></a>
 <input type="image" src="/img/buttons/submit_order.png" value="submit" name="submit_order" style="width: 120px; padding: 0">
    	</div><?php }?>
        </div>
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar');?>
<?php $this->end(); ?>