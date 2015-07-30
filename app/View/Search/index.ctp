<?php $this->start('main'); ?>
<?php echo $this->Html->script('search'); 
$lastPartSearch = $this->Session->read('lastSearch');?>
<?php // echo $this->Element('membernav'); ?>
<?php /*
<div class="main">

    <div class="text-box">
    	<div class="titles">Rapid Order Search Page</div>
		
	   	<form method="post">	
	    Line Code:  <script type="text/javascript" src="/js/views/helpers/auto_complete.js"></script><input name="data[linecode]" update="autoCompleteDiv" autoCompleteText="1" autoCompleteUrl="/search/auto_complete" autoCompleteRequestItem="autoCompleteText" type="text" id="linecode"/><div id="autoCompleteDiv" class="autoCompleteDiv"></div><?php  /*
echo $this->AutoComplete->input( 
    'linecode', 
    array( 
        'autoCompleteUrl'=>$this->Html->url(  
            array( 
                'controller'=>'search', 
                'action'=>'auto_complete', 
            ) 
        ), 
        'autoCompleteRequestItem'=>'autoCompleteText', 
    ) 
); 
//<input type="text" name="linecode" style="margin-right:1em" size="5">
   Part Number:  <input type="text" name="partnumber" size="10"><input type="image" src="/img/buttons/submit.png" style="margin-left:1em;" value="Submit">
	    </form>
    </div>

</div>*/?>

<?php if(!empty($results)): ?>

	<div class="main">
		<form action="/search">
        	<input type="hidden" name="clear" value="1" />
    		<input type="submit" value="Clear Search Results" />
        </form>
    <?php //print_r($results);?>
    	<div class="text-box">
    		<div class="titles">Search Results:<?php /* for: "<?php if(!empty($lastPartSearch)){echo $lastPartSearch;}*/?></div>
            <form method="post" action="/cart/add">
    		<table width="100%" style="float:left; clear:left; text-align:center;">
<tbody><tr><td colspan="9" style="text-align:right; font-size:10px"><a href="javascript:;" onclick="$('td.hide_price').show(),$('img.hide_price').show(),$('img.show_price').hide();"><img class="show_price" src="/img/buttons/show.png" border="0" style="display:none"/></a><a href="javascript:;" onclick="$('td.hide_price').hide(),$('img.hide_price').hide(),$('img.show_price').show();"><img class="hide_price" src="/img/buttons/hide.png" border="0"></a></td></tr>
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
<?php if((!empty($part['AAIA'])) && ($part['AAIA'] !== "NO_DCI")){?>
<a href="javascript:window.open('http://pedistributors.v12.catalograck.com/?hdnaaiabrand=<?php echo $part['AAIA'];?>&hdnpartno=<?php echo $part['PartNumber']; ?>','<?php echo $part['Line'].$part['PartNumber'].' ~ PRODUCT DETAILS'; ?>','width=850,height=600')">

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
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>
