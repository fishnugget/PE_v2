<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Account Information</a></li>
    <li><a href="#tabs-2">Order History</a></li>
    <li><a href="#tabs-3">Marketing Preferences</a></li>
  </ul>
  <div id="tabs-1">
    	<div class="titles" style="width:400px;float:left;">Your Account Information
        <?php if(!empty($salesman['ext'])){ ?>
        <div style="float:right;width:145px;">
        	<strong>Your P&E Salesman</strong>: <?php //print_r($salesmen);//echo ucwords(strtolower($salesman));?>
                <br/><img src="/img/salesman/<?php echo substr($salesman['ext'], -3); ?>.jpg" width="120px" style="padding:.25em" align="center" border="2">
                <br/><strong><?php echo ucwords(strtolower($salesman['name'])); ?></strong>
                <br/><?php echo $salesman['ext']; ?>
            </div> <?php }?>
        	<div style="float:left;">
        	<ul style="padding:1em;">
            	<li><strong>Account Number</strong>: <?php echo $user['A6'][0]; ?></li>
                <li><strong>Phone Number</strong>: <?php echo $user['A5'][0]; ?></li>
                <li><strong>Address</strong> : <?php echo $user['A1'][0]; ?></li>
		<?php if (!empty($user['A2'][0])): ?>
                <?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$user['A2'][0]; ?><br /><?php endif; ?>
                <?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$user['A3'][0].', '.$user['A3'][1].' '.$user['A3'][2]; ?>
<br />
<?php /*
$day=date('D');
$delivery_days=explode('|', $delivery['days']);
$delivery_cutoff=explode('|', $delivery['cutoff']);
$delivery_time_count=count($delivery_cutoff);

//if ($delivery_time_count > 1){$current_cutoff="";}else{$current_cutoff="";}

print_r($delivery_days);
$time=date('H:s');
$today = strpos($delivery['days'], $day);
			if (($delivery['same_day']=="Y") && ($today !== false) && (date('H:s')<$delivery['cutoff'])) {
				echo "<br />You can still get your order today! *IF ORDERED BY ".$delivery['cutoff']."<br />";
			}
$i=0;
$numItems = count($delivery_days);
foreach($delivery_days as $key => $value){
	if($value == $day){$today_id = $value;}
	 if(++$i === $numItems) {
    echo "last index!";
  }
	
}
echo "<p>".$today_id."</p>";

if($time < $delivery['cutoff']){echo $time;}

if($delivery['same_day']=='N'){$day="on your next delivery day.";$msg="the previous business day.";}else{ $day ="Same";$msg="in order to to receive order today.";}?> 	
		<li><strong>Delivery On : <?php echo $delivery['days'];?></li>
         	<li><strong>Cut Off Times : Orders must be placed by <?php $time_in_12_hour_format = date("g:i a", strtotime($delivery['cutoff']));
echo $time_in_12_hour_format." CST ".$msg;?> </li></ul>   
	  
<?php */ ?></div> 

    </div> 
	<div class="text-box" id="allcredit">
    	<a name="allcredit"></a>
    	<div class="titles" style="width:100%">Credit Information ~ <span style="font-size:9px"><a href="#allcredit" onclick="$('#creditinfo').slideToggle();">HIDE/SHOW CREDIT INFO</a></span></div>
        	
            <div style="float:left; display:none" id="creditinfo">
            
        	<div style="float:left;">
        	<ul style="padding:1em;">
            	<li><strong>Terms:</strong> <?php echo $user['TM'][0]; ?></li>
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
            
      
    </div></div>
   
  	<div class="text-box" id="allsettings">
    <a name="settings"></a>
    	<div class="titles" style="width:100%">Account Settings<span style="float:right; font-size:9px"><a href="#settings" onclick="$('#acctsettings').slideToggle();">HIDE/SHOW ACCOUNT SETTINGS</a></span></div>
        	
<div style="float:left; display:none" id="acctsettings"><div style="float:left">Online password changes have been temporarily disabled.  If you need to have your password reset, please call your salesman at (615) 851-8060.</div></div>
  </div>
  </div>
  <div id="tabs-2">
  <div width="100%" height="1000px">
  
  <iframe src="http://stage.pedistributors.com/orders/history" width="100%" height="300px"> </iframe>
    <?php //echo $this->Orders('history'); ?>
    </div>
  </div>
  <div id="tabs-3">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
</div>
 
 
</body>
</html>