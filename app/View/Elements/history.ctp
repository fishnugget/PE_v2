<?php // echo $this->Element('membernav'); 
	$dir = (!empty($_GET['dir']) && $_GET['dir'] == 'asc') ? 'desc' : 'asc';?>
	<table id="order-history-table" width="100%" cellpadding="5px" align="center" cellspacing="0">
		<tbody>
		<tr class="order-history-header">
			<td style="width:30px">X</td>
			<td>Status</td>
			<td><a href="/orders/history?page=<?php echo $page; ?>&sort=order&dir=<?php echo $dir; ?>">Order Number</a></td>
			<td><a href="/orders/history?page=<?php echo $page; ?>&sort=date&dir=<?php echo $dir; ?>">Date</a></td>
			<td><a href="/orders/history?page=<?php echo $page; ?>&sort=amount&dir=<?php echo $dir; ?>">Order Amt</a></td>
		</tr>
		<?php foreach($history[0] as $key => $order): ?>
		    <tr>
		    	<td><a href="/orders/detail/<?php echo $order[0]; ?>"><img src="/img/buttons/mag_glass.png" border="0"></a></td>
		    	<td><?php echo $order[4]; ?></td>
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