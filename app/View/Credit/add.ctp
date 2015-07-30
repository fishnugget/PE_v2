<?php $this->start('main'); ?>
<?php echo $this->Html->css('form'); ?>
<?php echo $this->Html->css('register'); ?>
<?php echo $this->Html->script('register'); ?>

<div style="width:100%; float:left; text-align:center; margin:20px"><a href="/credit/ordering"><img src="/img/oo.png" border="0"></a>  
</div>

	<div class="left-half-noborder">
    <div class="titles">Join P&amp;E Today!</div>
    <p style="clear:left;">If you would like to apply for a P&amp;E account, simply fill out the form below, print it out and sign in the necessary spots, then fax it to us.  We will then review your application, and contact you when your account has been established.  If you would prefer to download a form to fill out by hand, please click to the right to download the PDF version.  Please fax all completed credit applications to <strong>(615) 851-4053.</strong></p>
<p><strong>The following items MUST be submitted with your application:</strong>
<br />‐ Copy of Business License
<br />‐ Copy of Your State Tax Certificate of Resale
<br />‐ Photo of Your Store Front</p>	
	</div>
    
    <div class="right-half" style="padding-left:2em">
    <div class="titles">Why Register?</div>
    <p style="clear:left; padding-left:1em; float:left">
    	</p><ul style="">
        	<li>Fast Delivery</li>
            <li>Thousands of In-Stock Items</li>
            <li>Lowest Prices</li>
            <li>Online Ordering</li>
            <li>Huge Selection</li>
        </ul>    
    <p></p>
    <a href="/files/peapp.pdf" style="width: 100%; float: left; text-align: center;" download="P&E-AccountApplication.pdf"><img src="/img/print_pdf.png" border="0" style="width:100%"></a>
    </div>
    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') === false)
{
   echo '<center>
<embed src="http://stage.pedistributors.com/files/peapp.pdf" style="width:900px; height:600px;"/>
</center>';
}else{
	echo '<p align="center" style="clear:left;"><strong><a href="http://stage.pedistributors.com/files/peapp.pdf" download="peapplication">CLICK HERE TO DOWNLOAD, FILL OUT, PRINT &amp; FAX OUR APP</a></strong></p>';
	}
?>
    
<?php $this->end(); ?>
<?php /* $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); */?>
