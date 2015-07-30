<?php $this->start('main');?>
<?php echo $this->Html->script('search'); ?>
<?php echo $this->Html->css('form'); ?>
<?php // echo $this->Element('membernav');?>
<div class="main">
<img src="/img/progressbar/step1.jpg">
<?php if(!empty($cart)): ?>
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
	</div>		
    	</div>
<?php endif; //if($_SERVER['REMOTE_ADDR'] == '64.16.163.165'){print_r(get_defined_vars());}?>
<div class="titles shipping-confirmation-title">Shipping & Billing Confirmation.</div>
<div class="text-box" style="width:650px">
<form method="post" action="/cart/shipping">
<input type="hidden" name="shipping">
<div id="shipping-form">
	<div class="po-number">
    <?php  !empty($cart['po_number'])?$po=$cart['po_number']:$po ='';?>
    <?php if($user['PO'][0]=='N'){?>
    P.O. Number (optional): <input type="text" size="4" name="po_number" value="<?php echo $po;?>" >
    <?php }else{?>
    P.O. Number (required): <input type="text" size="4" name="po_number" value="<?php echo $po;?>" required>
    <?php } ?>
    </div>
<?php  !empty($cart['notes'])?$notes=$cart['notes']:$notes ='';?>
	<div class="notes-container">
    	<div class="notes-title">Notes (optional):</div>
		<textarea name="notes"><?php echo $notes;?></textarea>
	</div>
</div>
<span style="float:left; margin: 0;">Bill To</span>
	<div class="text-box-clear" style="margin-left:2em; font-size:12px; float: left; clear: left">
   
    	<ul style="list-style-type: none;">
		<li>Address: <?php echo $user['A1'][0]; ?></li>
		<?php echo !empty($user['A2'][0]) ? '<li>Address (2):'.$user['A2'][0].'</li>' : ''; ?>
		<li>City: <?php echo $user['A3'][0]; ?></li>
		<li>State: <?php echo $user['A3'][1]; ?></li>
		<li>Zip: <?php echo $user['A3'][2]; ?></li>        
		</ul>
        
    </div>
<div id="billing-select-form">
	<div style="float:left;">
		<input class="address-radio my-address" type="radio" name="ship_to" onclick="$('#location_box').slideUp();" value="false" checked>My Billing and Shipping Address are the Same
	</div>
	<div class="second-address-radio">
		<input class="address-radio alternate-address" type="radio" name="ship_to" onclick="$('#location_box').slideDown();" value="true">I use an alternate Shipping Address 
	</div>
	<div style="float:left; clear:both; display:none" id="location_box">
		<span style="float:left; margin:.5em 0 .5em 1.85em;">Use On-File Address: 
			<input type="Text" size="10" name="ship_to_num">
			<button type="submit">Get Store Location</button>
		</span>
<?php if($user['DS'][0] =='1'){//Customer can dropship?>
		<div style="float:left; clear:left; margin:.5em 0 .5em 0; width:100%; border-bottom:1px #000000 dashed">Or Enter Drop Ship Address Below
	</div>
	<table style="float:left; clear:left">
<tbody><tr><td style="text-align:right">c/o: </td><td><input type="Text" size="30" name="ship_to_careof"></td></tr>
<tr><td style="text-align:right">Address: </td><td><input type="Text" size="30" name="ship_to_address"></td></tr>
<tr><td style="text-align:right"></td><td><input type="Text" size="30" name="ship_to_address2"></td></tr>
<tr><td style="text-align:right">City: </td><td><input type="Text" size="30" name="ship_to_city"></td></tr>
<tr><td style="text-align:right">State: </td><td><input type="Text" size="30" name="ship_to_state"></td></tr>
<tr><td style="text-align:right">Zip: </td><td><input type="Text" size="30" name="ship_to_zip"></td></tr>
</tbody></table>
</div>
<?php } ?>
</div>
<div style="float:left; clear:both; margin:1em 0 0 0">
<input type="image" src="/img/buttons/submit_order.png" value="submit" name="submit_order" style="width: 120px; padding: 0"><a href="/cart/clear"><img src="/img/buttons/cancel_order.png" border="0" style="margin-left:.25em"></a>
</div>
</form></div>
</div></div>
<?php $this->end(); ?>
<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>