<?php $this->start('main'); ?>
<?php echo $this->Html->script('search'); ?>
<?php // echo $this->Element('membernav'); ?>
<div class="mobileMain">
    <div class="text-box">
    	<div class="titles">Rapid Order Search Page</div>
	   	<form method="post">	
	    Line Code:  <input type="text" name="linecode" style="margin-right:1em" size="5">  Part Number:  <input type="text" name="partnumber" size="10"><input type="image" src="/img/buttons/submit.png" style="margin-left:1em;" value="Submit">
	    </form>
    </div>
</div>

<?php if(!empty($results)): ?>
	<div class="main">
    	<div class="text-box">
    		<div class="titles">Search Results</div>
    		<table width="100%" style="float:left; clear:left; text-align:center;">
<tbody><tr><td colspan="9" style="text-align:right; font-size:10px"><a href="javascript:;" onclick="$('td.hide_price').show();"><img src="/img/buttons/show.png" border="0"></a><a href="javascript:;" onclick="$('td.hide_price').hide();"><img src="/img/buttons/hide.png" border="0"></a></td></tr>
<tr style="padding:1em; text-align:center; background-color:#efefef; font-size:9px">
<td>Details</td><td>Line Code</td><td>Part Number</td><td>Description</td><td>Qty.<br>
Available</td><td>Retail</td><td class="hide_price">Your Price</td><td class="hide_price">Tru-Blu<br>
Jobber</td><td>Order</td>
</tr>
<form method="post" action="/cart/add">
<?php foreach($results->DR as $key => $part): ?>
	<?php if(count($results->DR) > 1):?>
		<tr>
		<td style="font-size:9px; line-height:100%"></td>
		<td><?php echo $part[1]; ?></td>
		<td><?php echo $part[2]; ?></td>
		<td style="text-align:left"><?php echo $part[5]; ?></td>
		<td><input type="hidden" class="quantity_avail" id="<?php echo $part[0]; ?>" value="<?php echo $part[6]; ?>"><?php echo $part[6]; ?></td>
		<td><?php echo $part[7]; ?></td>
		<td class="hide_price"><?php echo $part[9]; ?></td>
		<td class="hide_price">
		<?php 
			if(!empty($part[12])){ echo $part[12]; 
			}else if(!empty($part[11])){ echo $part[11]; 
			}else{ echo  'N/A'; }; ?>
		</td>
		<td><input type="text" size="2" part="<?php echo $part[0]; ?>" name="parts[<?php echo $part[0]; ?>]" value="0" style="text-align:center" class="part_qty"></td>
		</tr>
	<?php else: ?>
		<tr>
		<td style="font-size:9px; line-height:100%"></td>
		<td><?php echo substr($part[0], 0,3); ?></td>
		<td><?php echo $part[2]; ?></td>
		<td style="text-align:left"><?php echo $part[5]; ?></td>
		<td><?php echo $part[6]; ?></td>
		<td><?php echo $part[7]; ?></td>
		<td class="hide_price"><?php echo $part[9]; ?></td>
		<td class="hide_price">
		<?php 
			if(!empty($part[12])){ echo $part[12]; 
			}else if(!empty($part[11])){ echo $part[11]; 
			}else{ echo  'N/A'; }; ?>
		</td>
		<td><input type="text" size="2" name="parts[<?php echo $part[0]; ?>]" value="0" style="text-align:center" class="part_qty"></td>
		</tr>
	<?php endif; ?>
<?php endforeach; ?>


<tr><td colspan="9" align="right"><?php if(!empty($cart)): ?><a href="/cart/checkout"><img src="/img/buttons/checkout.png" style="margin-right:1em" border="0"></a><?php endif; ?><input type="image" src="/img/buttons/add_to_cart.png" style="margin:1em 0 0 1em;" value="Submit"></form></td></tr>
    		


</tbody></table>
    		
    	</div>
	</div>
<?php endif; ?>
<?php $this->end(); ?>

<?php //$this->start('sidebar'); ?>
	<?php // echo $this->element('sidebar'); ?>
<?php $this->end(); ?>