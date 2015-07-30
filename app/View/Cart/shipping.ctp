<?php $this->start('main'); ?>
<?php echo $this->Html->css('form'); ?>
<?php // echo $this->Element('membernav');?>
<div class="main">



<div class="titles shipping-confirmation-title">Shipping & Billing Confirmation.</div>


<div class="text-box" style="width:650px">
<form method="post">
<input type="hidden" name="shipping">

<div id="shipping-form">
	<div class="po-number">
    <?php if($user['PO'][0]=='N'){?>
    P.O. Number (optional): <input type="text" size="4" name="po_number" value="" >
    <?php }else{?>
    P.O. Number (required): <input type="text" size="4" name="po_number" value="" required>
    <?php } ?>
    </div>

	<div class="notes-container">
    	<div class="notes-title">Notes (optional):</div>
		<textarea name="notes"></textarea>
	</div>
</div>

<span style="float:left; margin: 0;">Bill To</span>
	<div class="text-box-clear" style="margin-left:2em; font-size:12px; float: left; clear: left">
    	<ul style="list-style-type: none;">
		<li>Address: <?php echo $user['A1'][0]; ?></li>
		<li>Address (2): <?php echo !empty($user['A2'][0]) ? $user['A2'][0] : ''; ?></li>
		<li>City: <?php echo $user['A3'][0]; ?></li>
		<li>State: <?php echo $user['A3'][1]; ?></li>
		<li>Zip: <?php echo $user['A3'][2]; ?></li>        
		</ul>
    </div>


<div id="billing-select-form">
	<div style="float:left;">
		<input class="address-radio my-address" type="radio" name="ship_to" onclick="$('#location_box').slideUp();" value="false">My Billing and Shipping Address are the Same
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


<input type="image" src="/img/buttons/continuecheckout.png" value="submit" name="submit_order" style="width: 120px; padding: 0"><a href="/cart/clear"><img src="/img/buttons/cancel_order.png" border="0" style="margin-left:.25em"></a>

</div>


    
</form></div>

</div>
</div>

<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>