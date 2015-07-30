<?php $this->start('main'); //debug($user);?>
<script>
  function scrollWin()
{
window.scrollTo(0,0);
}
  window.onload=scrollWin;
</script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>

 <p></p>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Account Information</a></li>
    <li><a href="#tabs-2">Order History</a></li>
    <li><a href="#tabs-3">Marketing Preferences</a></li>
  </ul>
  <div id="tabs-1">
    	
        	<div>
        	<ul style="padding:1em;">
            	<li><strong>Account Number</strong>: <?php echo $user['A6'][0]; ?></li>
                <li><strong>Company</strong>&nbsp;: <?php echo $user['BT'][0]; ?></li>
                <li><strong>Address</strong>&nbsp;&nbsp;&nbsp;: <?php echo $user['A1'][0]; ?></li>
<?php $space="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	if (!empty($user['A2'][0])): echo $space.$user['A2'][0]."<br />";
	endif; 
	echo $space.$user['A3'][0].', '.$user['A3'][1].' '.$user['A3'][2]; ?>
                <li><strong>Phone Number</strong>: <?php echo $user['A5'][0]; ?></li>
<br />
    </div> 
	
    	<div class="titles">Credit Information ~ <span style="font-size:9px"><a href="#allcredit" onclick="$('#creditinfo').slideToggle();">HIDE/SHOW CREDIT INFO</a></span></div>
        	
            <div style="display:none" id="creditinfo">
            
        	<div>
        	<ul style="padding:1em;">
            	<li><strong>Terms:</strong> <?php echo $user['TM'][0]; ?></li>
                <?php if(strtoupper($user['TM'][0]) == 'CREDIT CARD' && !empty($CC['card'])){?>
                <li><strong>CC on file:</strong>&nbsp;&nbsp;&nbsp;: <?php echo $CC['card']; ?></li>
               <?php }?>
            	<li><strong>Credit Limit:</strong> $<?php echo number_format($user['CL'][0], 0, '.', ','); ?></li>
                <li><strong>Current Balance:</strong> $<?php echo number_format($user['AR'][0], 2, '.', ','); ?></li>
                <li><strong>Credit Available:</strong> $<?php echo number_format(($user['CR'][0]-$user['BA'][0]), 2, '.', ','); ?></li>
                <?php if($user['BA'][0] > '0.00'){?>
                    <li><strong>Amount on Order:</strong> $<?php echo number_format($user['BA'][0], 2, '.', ','); ?>
                    <?php }?>
                
                                <div class="notice">
                     <?php if($user['OV'][0] > '0.00'){?>
                    <mark><strong>You have an overdue balance of $<?php echo number_format($user['OV'][0], 2, '.', ','); ?>.
                    <br>
					Please bring your account up to date.</strong></mark>
                    <?php } //print_r($user);?>
                </div>
                            </ul>
            </div>
            
      
    </div>
   
  	
    	<div class="titles" style="width:100%">Account Settings ~ <span style="font-size:9px"><a href="#settings" onclick="$('#acctsettings').slideToggle();">HIDE/SHOW ACCOUNT SETTINGS</a></span></div>
        	
<div style="display:none" id="acctsettings"><div>Online password changes have been temporarily disabled.  If you need to have your password reset, please call your salesman at (615) 851-8060.</div></div>
  </div>
 
  <div id="tabs-2">
  <div width="100%" height="1000px">
  <!--Order History-->
  <?php if(!isset($history[0])){echo "<h3><center>NO ORDER HISTORY FOUND <br />REFRESH PAGE IF YOU FEEL THIS IS INCORRECT</center>
  </h3>";}else{?>
	<table id="order-history-table" width="100%" cellpadding="5px" align="center" cellspacing="0">
		<tbody>
		<tr class="order-history-header">
			<td style="width:30px">X</td>
			<td>Status</td>
			<td>Order Number</td>
			<td>Date</td>
			<td>Order Amt</td>
		</tr>
        
		<?php foreach($history[0] as $key => $order): //print_r($order);?>
        
		    <tr>
		    	<td><a href="/orders/detail/<?php echo !empty($order[4])?$order[4]."?type=".$order[5]:$order[0]."?type=O"; ?>"><img src="/img/buttons/mag_glass.png" border="0"></a></td>
		    	<td><?php 
				switch($order[5])
		{
			case 'I' && !empty($order[4]): echo "SHIPPED";//$order[6];
			break;
			case 'I' && empty($order[4]): echo "PROCESSING";//$order[6];
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
		        <td align="right"><?php echo !empty($order[3]) ? $order[3] : '$0.00'; ?></td>
		    </tr>
		<?php endforeach; //print_r($order);?>
		</tbody>
	</table>
	
	<div style="width:100%; text-align:center;">
		<?php for($i=1; $i< count($history); $i++): ?>
    		<a href="/orders/history?page=<?php echo $i;?>"><?php echo $i; ?></a>
		<?php endfor; ?>
	</div>
  <!--<iframe src="http://stage.pedistributors.com/orders/history" width="100%" height="300px"> </iframe>-->
    <?php 
  }
	//echo $this->Element('history'); ?>
    </div>
  </div>
  <div id="tabs-3">
  <p>Sign up to our newsletters and keep up to date with the latest news, offers and more...</p>
    <?php echo $this->Element('newsletter'); ?>
  </div>
</div>
<?php $this->end(); ?>
<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>