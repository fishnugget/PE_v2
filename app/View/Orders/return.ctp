<?php $this->start('main'); 
	//debug($order);
?>
<?php // echo $this->Element('membernav'); ?>
<div class="main">



	<div class="order-details-text-box text-box">
		<input type="button" onClick="window.print()" value="Print This Page";/>
       <img src="/img/InvoiceBanner.jpg"></a>
		<span class="invoice-number">Invoice Number: <?php echo $order->OH[0]; ?></span>
		<span class="invoice-date">Invoice Date: <?php echo $order->OH[1]; ?></span>
	</div>

	<table id="details" width="100%" cellpadding="5px">
		<tbody>
			<tr class="details-header">
				<td>Line Code</td>
				<td>Part Number</td>
				<td>Part Description</td>
				<td>Quantity Ordered</td>
				<td>Price per Unit</td>
				<td>Totals</td>
			</tr>
		<?php foreach($order->D1 as $key => $response): ?>
			<tr style="background-color:#CCCCCC">
				<td><?php echo $response[0]; ?></td>
				<td><?php echo $response[1]; ?></td>
				<td style="text-align:left; width:300px"><?php echo $response[2]; ?></td>
				<td><?php echo $response[3]; ?></td>
				<td><?php echo $response[4]; ?></td>
				<td><?php echo $response[5]; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<div class="shipping-label">Shipping: <?php echo $order->OH[4]; ?></div>
	<div class="shipping-total">Total: <?php echo $order->OH[3]; ?></div>
	<div class="text-box" style="margin-top: 20px;">
		<?php $count = 1; ?>
		<?php foreach($order as $responseType => $response): ?>
			<?php if(!empty($response[1]) && $response[1] == 'COMMENT'): ?>
				<div class="titles">Comments</div>
			<?php
				echo '['.$count.'] '.$response[2].'<br>';
				$count++;
			?>
			<?php endif; ?>
		<?php endforeach; ?>	
	</div>	
	</div>
</div>
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>