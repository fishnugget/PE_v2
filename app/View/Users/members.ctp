<?php
$this->start('main');
?>
    <div> 
    <table width="1000" border="0">
    <tr>
    <td>
    <?php echo  '<strong>Year/Make/Model Search</strong><br><script type="text/javascript" src="http://pedistributors.v12.catalograck.com/scripts/dciframes.js"></script><iframe id="ifVehicleModule" width="210" height="130" frameborder="0" name="ifVehicleModule" src="" scrolling="no"></iframe>';?>
    </td>
    <td colspan="3">
	<?php if(empty($results)): //echo $this->element('search'); ?>
    <div class="main">
    <p>Welcome to P&amp;E's new site. We've heard your suggestions, and welcome any additional critiques, good & bad.</p>
    </
    <div class="main">
    <li><strong>1)</strong> If you know your brand and part#, start at the top of the page. First start typing the brand or P&E linecode, if you know it. After typing in a few letters, you may see the brand you want, otherwise, keep typing. When you do see the brand, move your cursor to the logo and click. The P&E linecode should be shown in the first box. Press tab, or mouse click on the 2nd box. Type your part number. Mouse click "Search."</div>
	
	<?php endif; ?>

<?php if(!empty($results)): echo $this->Html->script('search'); 
		$lastPartSearch = $this->Session->read('lastSearch');?>

	<div class="main">
		<form action="/search">
        	<input type="hidden" name="clear" value="1" />
    		<input type="submit" value="Clear Search Results" />
        </form>
    <?php //print_r($results);?>
    	<div class="text-box">
    		<!--<div class="titles">Search Results:<?php /* for: "<?php if(!empty($lastPartSearch)){echo $lastPartSearch;}*/?></div>-->
            <form method="post" action="/cart/add">
    		<table width="100%" style="float:left; clear:left; text-align:center;">
<tbody><tr><td colspan="2"style="text-align:left;font-size:2em"><strong>Search Results:</strong></td><td colspan="7" style="text-align:right; font-size:10px"><a href="javascript:;" onclick="$('td.hide_price').show(),$('img.hide_price').show(),$('img.show_price').hide();"><img class="show_price" src="/img/buttons/show.png" border="0" style="display:none"/></a><a href="javascript:;" onclick="$('td.hide_price').hide(),$('img.hide_price').hide(),$('img.show_price').show();"><img class="hide_price" src="/img/buttons/hide.png" border="0"></a></td></tr>
<tr style="padding:1em; text-align:center; background-color:#efefef; font-size:9px">
<td>Details</td><td>Line Code</td><td>Part Number</td><td>Description</td><td>Qty.<br>
Available</td><td>Retail</td><td class="hide_price">Your Price</td><td class="hide_price">Tru-Blu<br>
Jobber</td><td>Order</td>
</tr>


<?php 
//print_r($AltResults);
foreach($results as $key => $part): 
//if(isset($_GET[cat]) && $part[6] <= 0){continue ;}
?>
<?php if(count($results) > 1):?>

	<tr>
            <td style="font-size:9px; line-height:100%">
<?php if((!empty($part['AAIA'])) && ($part['AAIA'] !== "NO_DCI")){?><a href="javascript:window.open('http://pedistributors.v12.catalograck.com/?hdnaaiabrand=<?php echo $part['AAIA'];?>&hdnpartno=<?php echo $part['PartNumber']; ?>','<?php echo $part['Line'].$part['PartNumber'].' ~ PRODUCT DETAILS'; ?>','width=850,height=600')">

<!--<a href="/search/ymm?hdnaaiabrand=<?php // echo $part['AAIA'];?>&hdnpartno=<?php // echo $part['PartNumber']; ?>">-->
<img src="/img/buttons/details.png" style="margin-right:1em" border="0"></a><?php } ?>
		</td>
            <td><?php echo $part['Line']; ?></td>
            <td style="text-align:left"><?php echo $part['PartNumber']; ?></td>
            <td style="text-align:left"><?php echo $part['Description']; ?></td>
            <td><input type="hidden" class="quantity_avail" id="<?php echo $part['FullPart']; ?>" value="<?php echo $part['QtyAvailable']; ?>"><?php echo $part['QtyAvailable']; ?></td>
            <td><?php echo $part['Retail']; ?></td>
            <td class="hide_price"><?php echo $part['YourPrice']; ?></td>
            <td class="hide_price"><?php echo $part['Jobber'];?> </td>
            <td><input type="text" size="2" part="<?php echo $part['FullPart']; ?>" name="parts[<?php echo $part['FullPart']; ?>]" value="0" style="text-align:center" class="part_qty"></td>
	</tr>
	<?php else: ?>
		<tr>
		<td style="font-size:9px; line-height:100%">
<?php if((!empty($part['AAIA'])) && ($part['AAIA'] !== "NO_DCI")){?><a href="javascript:window.open('http://pedistributors.v12.catalograck.com/?hdnaaiabrand=<?php echo $part['AAIA'];?>&hdnpartno=<?php echo $part['PartNumber']; ?>','<?php echo $part['Line'].$part['PartNumber'].' ~ PRODUCT DETAILS'; ?>','width=850,height=600')">

<!--<a href="/search/ymm?hdnaaiabrand=<?php // echo $part['AAIA'];?>&hdnpartno=<?php // echo $part['PartNumber']; ?>">-->
<img src="/img/buttons/details.png" style="margin-right:1em" border="0"></a><?php } ?></td>
		<td><?php echo substr($part['FullPart'], 0,3); ?></td>
		<td><?php echo $part['PartNumber']; ?></td>
		<td style="text-align:left"><?php echo $part['Description']; ?></td>
		<td><?php echo $part['QtyAvailable']; ?></td>
		<td><?php echo $part['Retail']; ?></td>
		<td class="hide_price"><?php echo $part['YourPrice']; ?></td>
		<td class="hide_price"><?php echo $part['Jobber'];?> </td>
		<td><input type="text" size="2" name="parts[<?php echo $part['FullPart']; ?>]" value="1" style="text-align:center" class="part_qty"></td>
		</tr>
	<?php endif; ?>
<?php endforeach; ?>

<?php /* Display alternate parts. Mainframe not sending quantity on hand for altparts
 if(isset($AltResults)){
	echo "<tr><td colspan='9'><h3>ALTERNATE PARTS</h3></td></tr>";
	foreach($AltResults as $key => $part): ?>
	
	<tr>
		<td style="font-size:9px; line-height:100%">
<?php if((!empty($part['AAIA'])) && ($part['AAIA'] !== "NO_DCI")){?><a href="/search/ymm?hdnaaiabrand=<?php echo $part['AAIA'];?>&hdnpartno=<?php echo $part['PartNumber']; ?>">
<img src="/img/buttons/details.png" style="margin-right:1em" border="0"></a><?php } ?></td>
		<td><?php echo substr($part['FullPart'], 0,3); ?></td>
		<td><?php echo $part['PartNumber']; ?></td>
		<td style="text-align:left"><?php echo $part['Description']; ?></td>
		<td><?php echo $part['QtyAvailable']; ?></td>
		<td><?php echo $part['Retail']; ?></td>
		<td class="hide_price"><?php echo $part['YourPrice']; ?></td>
		<td class="hide_price"><?php echo $part['Jobber'];?> </td>
		<td><input type="text" size="2" name="parts[<?php echo $part['FullPart']; ?>]" value="0" style="text-align:center" class="part_qty"></td>
		</tr>
<?php	
endforeach;	}
*/?>


<tr><td colspan="9" align="right"><?php if(!empty($cart)): ?><a href="/cart/checkout"><img src="/img/buttons/checkout.png" style="margin-right:1em" border="0"></a><?php endif; ?><input type="image" src="/img/buttons/add_to_cart.png" style="margin:1em 0 0 1em;" value="Submit"></td></tr>
    		
</tbody></table></form>
    		
    	</div>
	</div>
<?php endif; ?>
</table>
  
    </td>
    </tr>
   <td colspan="4"> 
  <tr>
    <td><a href=http://stage.pedistributors.com/specials><img src="/img/slices/2.jpg"></a></td>
    <td><a href=http://stage.pedistributors.com/AVSpecials><img src="/img/slices/4.jpg"></a></td>
    <td><a href=http://stage.pedistributors.com/rebates><img src="/img/slices/5.jpg"></a></td>
    <td><a href=http://stage.pedistributors.com/lookup><img src="/img/slices/7.jpg"></a></td>
  </tr>
  </td>
</table>
</div>

<?php //echo $this->Element('newsletter');?>
<?php
$this->end();
?>

<?php /* $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); */?>