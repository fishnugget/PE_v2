<?php $this->start('main'); //debug($order);
$receipt['order_number'] =$order->OH[0];
$receipt['po_number'] =$order->OH[2];
$receipt['date'] = $order->OH[1];
/*
$receipt['Billing']['address1'] =;
$receipt['Billing']['address1'] =;
$receipt['Billing']['address2'] =;
$receipt['Billing']['city'] =;
$receipt['Billing']['state'] =;
$receipt['Billing']['zip'] =;
$receipt['Shipping']['careof'] =;
$receipt['Shipping']['address1'] =;
$receipt['Shipping']['address2'] =;
$receipt['Shipping']['city'] =;
$receipt['Shipping']['state'] =;
$receipt['Shipping']['zip'] =;*/
$receipt['Shipping']['charge'] = substr($order->OH[4],1);
$receipt['items'] = $order->D1;
$receipt['notes'] = '';
$receipt['total'] = substr($order->OH[3],1);
$receipt['subtotal'] = ($receipt['total']-$receipt['Shipping']['charge']);
//debug($receipt);
switch($_GET['type'])
		{
			case 'I': $receipt['type'] = "Invoice";//$order[6];
			break;
			case 'O': $receipt['type'] = "Order";
			break;
			case 'CM': $receipt['type'] = "CREDIT MEMO";
			break;
			case 'RA': $receipt['type'] = "RETURN AUTHORIZATION";
			break;
		}?>
<div class="main">
<?php //debug($order);?>
    <input type="button" onClick="window.print()" value="Print This <?php echo $receipt['type'];?>" id="printButton"; />
<div style="background:#F6F6F6; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; margin:0; padding:0;">
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
    <td align="center" valign="top" style="padding:20px 0 20px 0">
        <!-- [ header starts here] -->
         <table id="receipt" bgcolor="#FFFFFF" cellspacing="0" cellpadding="10" border="0" width="650" style="border:1px solid #E0E0E0;">
            <tr>
                <td width="360" valign="middle"><a href="http://stage.pedistributors.com/"><img src="http://stage.pedistributors.com/img/logos/peLogo_300px.png" alt="Pedistributors.com" style="margin-bottom:10px;" border="0"/></a><br /><span style="font-size:18px; font-weight:normal; margin:0;">Toll-Free: 1-800-251-2034</span></td>
                <td width="270" valign="top"><p><span style="font-size:18px; font-weight:normal; margin:0;"><?php echo $receipt['type']."<br />";echo !empty($receipt['order_number'])? "# ".$receipt['order_number']: $order->U1->status; ?> <small><br />(placed on
                  <?PHP echo $receipt['date']; ?>)</small></span></p>
                <p><span style="font-size:18px; font-weight:normal; margin:0;"><?php echo "PO #".$receipt['po_number'];?> </span></p></td>
            </tr>
        <!-- [ middle starts here] -->
            <tr>
                <td colspan="2">
                    <table cellspacing="0" cellpadding="0" border="0" width="335">
                        <thead>
                        <tr>
                            <th align="left" width="325" bgcolor="#EAEAEA" style="font-size:13px; padding:5px 9px 6px 9px; line-height:1em;">Billing Information:</th>
                            <th width="10"></th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td valign="top" style="font-size:12px; padding:7px 9px 9px 9px; border-left:1px solid #EAEAEA; border-bottom:1px solid #EAEAEA; border-right:1px solid #EAEAEA;">
                               
<?php echo $user['BT'][0]."<br />".$user['A4'][0]; ?><br />
<?php echo $user['A1'][0]; ?><br />
<?php if(!empty($user['A2'][0])): ?>
    	<?php echo $user['A2'][0]; ?><br />
    	<?php endif; ?>
<?php echo $user['A3'][0]; ?>,  <?php echo $user['A3'][1]; ?>, <?php echo $user['A3'][2]; ?><br/>
T: <?php echo $user['A5'][0]; ?>

                            </td>
                            <td>&nbsp;</td>
                          </tr>
                        </tbody>
                    </table>
                    <br/>
                    
                    <table cellspacing="0" cellpadding="0" border="0" width="726" style="border:1px solid #EAEAEA;">
    <thead>
        <tr>
          <th width="167" align="left" bgcolor="#EAEAEA" style="font-size:13px; padding:3px 9px">Part#</th>
            <th colspan="2" align="left" bgcolor="#EAEAEA" style="font-size:13px; padding:3px 9px">Item</th>
            <th width="90" align="center" bgcolor="#EAEAEA" style="font-size:13px; padding:3px 9px">Qty</th>
            <th width="131" align="right" bgcolor="#EAEAEA" style="font-size:13px; padding:3px 9px">Subtotal</th>
        </tr>
    </thead>

            <tbody bgcolor="#F6F6F6">
            
            <?php //debug($receipt['items']);
			$i=0; $partnote=""; foreach($receipt['items'] as $key => $part): $i++;
			if($part[1]=='COMMENT' && $part[4]=='$0.00'){$receipt['notes'][]=$part[2];continue;}
			$partnote=!empty($part[3])?$part[0].$part[1]:"";
			//debug($partnote);
				$part['Line'] = $part[0];
				$part['PartNumber'] = $part[1];
				$part['Description'] = !empty($part[2])?$part[2]:"SPECIAL ORDER";
				$part['qty'] = $part[3];
				$part['YourPrice'] = $part[4]; ?>
            
        <tr>
          <td align="left" valign="top" style="font-size:11px; padding:3px 9px; border-bottom:1px dotted #CCCCCC;"><?php echo $part['Line'].$part['PartNumber']; ?></td>
    <td colspan="2" align="left" valign="top" style="font-size:11px; padding:3px 9px; border-bottom:1px dotted #CCCCCC;"><strong style="font-size:11px;"><?php echo $part['Description'] ; ?></strong></td>
    <td align="center" valign="top" style="font-size:11px; padding:3px 9px; border-bottom:1px dotted #CCCCCC;"><?php echo $part['qty']; ?></td>
    <td align="right" valign="top" style="font-size:11px; padding:3px 9px; border-bottom:1px dotted #CCCCCC;">
                                                <span class="price"><?php echo $part['YourPrice']; ?></span>
            </td>
</tr>
<?php endforeach; ?>
    </tbody>
    
    <tbody>
                <tr class="subtotal">
        <td colspan="2" rowspan="4" align="left" style="padding:3px 9px"><strong>NOTES: </strong>
		<?php
		if(is_array($receipt['notes'])){
        foreach($receipt['notes'] as $notes){
		if(empty($notes) || $notes==$partnote){continue;}else{echo "<br />".$notes;}
		}
		}
		?></td>
        <td colspan="2" align="right" style="padding:3px 9px">Subtotal</td>
        <td align="right" style="padding:3px 9px">
                        <span class="price">$<?php echo $receipt['subtotal']; //+ $receipt['Shipping']['charge']; ?></span>                    </td>
    </tr>
            <tr class="shipping">
        <td colspan="2" align="right" style="padding:3px 9px">S&amp;H</td>
        <td align="right" style="padding:3px 9px">
                        <span class="price">$<?php echo $receipt['Shipping']['charge'];?></span>                    </td>
    </tr>
                

<tr>
    <td colspan="2" align="right" style="padding:3px 9px">Tax</td>
    <td align="right" style="padding:3px 9px"><span class="price">$0.00</span></td>
</tr>
            <tr class="grand_total">
        <td colspan="2" align="right" style="padding:3px 9px"><strong>Grand Total</strong></td>
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
                <td colspan="2" align="center" bgcolor="#EAEAEA" style="background:#EAEAEA; text-align:center;"><center><p style="font-size:12px; margin:0;">Thank you again, <strong>Pedistributors.com</strong></p></center></td>
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