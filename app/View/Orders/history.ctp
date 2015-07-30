<?php $this->start('main');?>
	<?php // echo $this->Element('membernav'); 
	$dir = (!empty($_GET['dir']) && $_GET['dir'] == 'asc') ? 'desc' : 'asc';?>
	<table id="order-history-table" width="100%" cellpadding="5px" align="center" cellspacing="0">
		<tbody>
		<tr class="order-history-header">
			<td style="width:30px">X</td>
			<td><a href="/orders/history?page=<?php echo $page; ?>&sort=status&dir=<?php echo $dir; ?>">Status</a></td>
			<td><a href="/orders/history?page=<?php echo $page; ?>&sort=order&dir=<?php echo $dir; ?>">Order Number</a></td>
			<td><a href="/orders/history?page=<?php echo $page; ?>&sort=date&dir=<?php echo $dir; ?>">Date</a></td>
			<td><a href="/orders/history?page=<?php echo $page; ?>&sort=amount&dir=<?php echo $dir; ?>">Order Amt</a></td>
		</tr>
		<?php foreach($history[0] as $key => $order): //print_r($order);?>
        
		    <tr>
		    	<td><a href="/orders/detail/<?php echo !empty($order[4])?$order[4]."?type=".$order[5]:$order[0]."?type=".$order[5]; ?>"><img src="/img/buttons/mag_glass.png" border="0"></a></td>
		    	<td><?php 
				switch($order[5])
		{
			case 'I': echo "SHIPPED";//$order[6];
			break;
			case 'O': echo "UNAVAILABLE";
			break;
			case 'CM': echo "CREDIT";
			break;
			case 'RA': echo "PENDING RETURN";
			break;
		}?>	</td>
		    	<td><?php echo $order[0]; ?></td>
		        <td><?php echo $order[1]; ?></td>
		        <td><?php echo !empty($order[3]) ? $order[3] : '$0.00'; ?></td>
		    </tr>
		<?php endforeach; //print_r($order);?>
		</tbody>
	</table>
	
	<div style="width:100%; text-align:center;">
		<?php for($i=1; $i< count($history); $i++): ?>
    		<a href="/orders/history?page=<?php echo $i;?>"><?php echo $i; ?></a>
		<?php endfor; ?>
	</div>
	
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>