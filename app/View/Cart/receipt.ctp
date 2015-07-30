<?php $this->start('main'); //debug($receipt);?>

<?php //debug($receipt); // echo $this->Element('membernav'); ?>
<?php /*
	<div class="main">
    <img src="/img/progressbar/step3.jpg">
    	<div class="text-box">
    		<div class="titles">Your order has been placed</div>
    		<div class="titles">Order Number: <?php echo $order->U1[13]; ?></div>
    		<div class="titles" style="margin-top: 10px">Ordered Items</div>
    		<table id="receipt-table" width="100%">
    		<tbody>
				<tr>
				<td>Line Code</td><td>Part Number</td><td>Description</td><td>Qty.<br>
				Available</td><td>Retail</td><td class="hide_price">Your Price</td><td class="hide_price">Tru-Blu<br>
				Jobber</td><td>Order</td>
				</tr>
				<?php foreach($receipt['items'] as $key => $part): ?>
						<tr>
						<td><?php echo $part['Line']; ?></td>
						<td><?php echo $part['PartNumber']; ?></td>
						<td style="text-align:left"><?php echo $part['Description'] ; ?></td>
                        <td><?php echo $part['QtyAvailable']; ?></td>
						<td><?php echo $part['Retail']; ?></td>
						<td class="hide_price"><?php echo $part['YourPrice']; ?></td>
						<td class="hide_price"><?php echo $part['Jobber']; ?></td>
						<td><?php echo $part['qty']; ?></td>
						</tr>
				<?php endforeach; ?>	
	
			</tbody>
			</table>
			<div id="cart-total">
    <p class="titles">Shopping Cart Total: $<?php echo $receipt['total']; //+ $receipt['Shipping']['charge']; ?></p>	
	</div>
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
    	<?php if(!empty($receipt['Shipping']['careof'])): ?>
    	<li>c/o: <?php echo $receipt['Shipping']['careof']; ?></li>
    	<?php endif; ?>
    	<li>Address: <?php echo $receipt['Shipping']['address1']; ?></li>
    	<?php if(!empty($cart['Shipping']['address2'])): ?>
    	<li>Suite, Unit, or Apt#: <?php echo $cart['Shipping']['address2']; ?></li>
    	<?php endif; ?>
		<li>City: <?php echo $receipt['Shipping']['city']; ?></li>
		<li>State: <?php echo $receipt['Shipping']['state']; ?></li>
		<li>Zip: <?php echo $receipt['Shipping']['zip']; ?></li>
		</ul>
    </div>
<?php */?>
<div class="main">
    <img src="/img/progressbar/step3.jpg" id="progressBar">
    <input type="button" onClick="window.print()" value="Print This Page" id="printButton"; />
<div style="background:#F6F6F6; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; margin:0; padding:0;">
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
    <td align="center" valign="top" style="padding:20px 0 20px 0">
        <!-- [ header starts here] -->
         <table id="receipt" bgcolor="#FFFFFF" cellspacing="0" cellpadding="10" border="0" width="650" style="border:1px solid #E0E0E0;">
            <tr>
                <td valign="top"><a href="http://stage.pedistributors.com/"><img src="http://stage.pedistributors.com/img/logos/peLogo_300px.png" alt="Pedistributors.com" style="margin-bottom:10px;" border="0"/></a></td>
            </tr>
        <!-- [ middle starts here] -->
            <tr>
                <td valign="top">
                    <h1 style="font-size:22px; font-weight:normal; line-height:22px; margin:0 0 11px 0;">Hello, </h1>
                    <p style="font-size:12px; line-height:16px; margin:0 0 10px 0;">
                        Thank you for your order from Pedistributors.com.
                        If you have any questions about your order please contact us at <a href="mailto:online@pedistributors.com" style="color:#1E7EC8;">online@pedistributors.com</a> or call us at <span class="nobr">800-251-2034</span> Monday - Friday, 8am - 5pm CST.
                    </p>
                    <p style="font-size:12px; line-height:16px; margin:0;">Your order confirmation is below. Thank you again for your business.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h2 style="font-size:18px; font-weight:normal; margin:0;">Your Order #<?php echo !empty($order->U1[13])? $order->U1[13]: $order->U1->status; ?> <small>(placed at <?PHP //echo date_format($date, 'g:ia \o\n l F jS, Y');
					echo date('g:ia \C\S\T \o\n m/d/Y'); ?>)<!--July 25, 2013 4:58:39 PM CDT)--></small></h2>
                </td>
            </tr>
            <tr>
            <td>
            <h2 style="font-size:18px; font-weight:normal; margin:0;">
            <?php echo "Your PO ".$receipt['po_number'];?>
            </h2>
            </td>
            </tr>
            <tr>
                <td>
                    <table cellspacing="0" cellpadding="0" border="0" width="650">
                        <thead>
                        <tr>
                            <th align="left" width="325" bgcolor="#EAEAEA" style="font-size:13px; padding:5px 9px 6px 9px; line-height:1em;">Billing Information:</th>
                            <th width="10"></th>
                            <th align="left" width="325" bgcolor="#EAEAEA" style="font-size:13px; padding:5px 9px 6px 9px; line-height:1em;">Payment Method:</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td valign="top" style="font-size:12px; padding:7px 9px 9px 9px; border-left:1px solid #EAEAEA; border-bottom:1px solid #EAEAEA; border-right:1px solid #EAEAEA;">
                               
<?php echo $user['BT'][0]."<br />".$user['A4'][0]; ?><br />
<?php echo $receipt['Billing']['address1']; ?><br />
<?php if(!empty($receipt['Billing']['address2'])): ?>
    	<?php echo $receipt['Billing']['address2']; ?><br />
    	<?php endif; ?>
<?php echo $receipt['Billing']['city']; ?>,  <?php echo $receipt['Billing']['state']; ?>, <?php echo $receipt['Billing']['zip']; ?><br/>
T: <?php echo $user['A5'][0]; ?>

                            </td>
                            <td>&nbsp;</td>
                            <td valign="top" style="font-size:12px; padding:7px 9px 9px 9px; border-left:1px solid #EAEAEA; border-bottom:1px solid #EAEAEA; border-right:1px solid #EAEAEA;">
                            <?php if(isset($payment)){?>
                            <p><strong>Credit Card<br />
                           <?php echo $CC['card']."</strong></p>";
                           }else{echo "P&E Account";} ?>
                           </td>
                        </tr>
                        </tbody>
                    </table>
                    <br/>
                    
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <thead>
                        <tr>
                            <th align="left" width="325" bgcolor="#EAEAEA" style="font-size:13px; padding:5px 9px 6px 9px; line-height:1em;">Shipping Information:</th>
                            <th width="10"></th>
                            <th align="left" width="325" bgcolor="#EAEAEA" style="font-size:13px; padding:5px 9px 6px 9px; line-height:1em;">Shipping Method:</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td valign="top" style="font-size:12px; padding:7px 9px 9px 9px; border-left:1px solid #EAEAEA; border-bottom:1px solid #EAEAEA; border-right:1px solid #EAEAEA;">
                                
<?php if(!empty($receipt['Shipping']['careof'])): ?>
<?php echo $receipt['Shipping']['careof']; ?></li>
    	<br /><?php endif; ?>
<?php echo $receipt['Shipping']['address1']; ?><br />
<?php if(!empty($cart['Shipping']['address2'])): ?>
    	<?php echo $cart['Shipping']['address2']; ?><br />
    	<?php endif; ?>
<?php echo $receipt['Shipping']['city']; ?>,  <?php echo $receipt['Shipping']['state']; ?>, <?php echo $receipt['Shipping']['zip']; ?>
                            </td>
                            <td>&nbsp;</td>
                            <td valign="top" style="font-size:12px; padding:7px 9px 9px 9px; border-left:1px solid #EAEAEA; border-bottom:1px solid #EAEAEA; border-right:1px solid #EAEAEA;">
                                -
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br/>
                    
                    <table cellspacing="0" cellpadding="0" border="0" width="650" style="border:1px solid #EAEAEA;">
    <thead>
        <tr>
            <th width="171" align="left" bgcolor="#EAEAEA" style="font-size:13px; padding:3px 9px">Item</th>
            <th width="167" align="left" bgcolor="#EAEAEA" style="font-size:13px; padding:3px 9px">Part#</th>
            <th width="179" align="center" bgcolor="#EAEAEA" style="font-size:13px; padding:3px 9px">Qty</th>
            <th width="131" align="right" bgcolor="#EAEAEA" style="font-size:13px; padding:3px 9px">Subtotal</th>
        </tr>
    </thead>

            <tbody bgcolor="#F6F6F6">
            <?php foreach($receipt['items'] as $key => $part): ?>
        <tr>
    <td align="left" valign="top" style="font-size:11px; padding:3px 9px; border-bottom:1px dotted #CCCCCC;">
        <strong style="font-size:11px;"><?php echo $part['Description'] ; ?></strong>
                                                        </td>
    <td align="left" valign="top" style="font-size:11px; padding:3px 9px; border-bottom:1px dotted #CCCCCC;"><?php echo $part['Line'].$part['PartNumber']; ?></td>
    <td align="center" valign="top" style="font-size:11px; padding:3px 9px; border-bottom:1px dotted #CCCCCC;"><?php echo $part['qty']; ?></td>
    <td align="right" valign="top" style="font-size:11px; padding:3px 9px; border-bottom:1px dotted #CCCCCC;">
                                                <span class="price">$<?php echo $part['YourPrice']; ?></span>
            </td>
</tr>
<?php endforeach; ?>
    </tbody>
    
    <tbody>
                <tr class="subtotal">
        <td colspan="2" rowspan="4" align="left" style="padding:3px 9px"><strong>NOTES: </strong><?php echo $receipt['notes'];?></td>
        <td align="right" style="padding:3px 9px">Subtotal</td>
        <td align="right" style="padding:3px 9px">
                        <span class="price">$<?php echo $receipt['total']; //+ $receipt['Shipping']['charge']; ?></span>                    </td>
    </tr>
            <tr class="shipping">
        <td align="right" style="padding:3px 9px">S&amp;H</td>
        <td align="right" style="padding:3px 9px">
                        <span class="price">TBD</span>                    </td>
    </tr>
                

<tr>
    <td align="right" style="padding:3px 9px">Tax</td>
    <td align="right" style="padding:3px 9px"><span class="price">$0.00</span></td>
</tr>
            <tr class="grand_total">
        <td align="right" style="padding:3px 9px"><strong>Grand Total</strong></td>
        <td align="right" style="padding:3px 9px">
                        <strong><span class="price">$<?php echo $receipt['total']; //+ $receipt['Shipping']['charge']; ?></span></strong>
                    </td>
    </tr>
        </tbody>
</table>

                    <p style="font-size:12px; margin:0 10px 10px 0"></p>
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#EAEAEA" style="background:#EAEAEA; text-align:center;"><center><p style="font-size:12px; margin:0;">Thank you again, <strong>Pedistributors.com</strong></p></center></td>
            </tr>
        </table>
    </td>
</tr>
</table>
</div>
    </div>
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>