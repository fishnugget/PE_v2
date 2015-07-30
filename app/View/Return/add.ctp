<?php $this->start('main'); ?>
<?php echo $this->Html->css('form'); ?>
<?php echo $this->Html->css('register'); ?>
<form action="/returns/add" onsubmit="return validateForm()" name="Returns" method="POST">
<table border="0" cellpadding="0" cellspacing="0" style="font-family: arial, sans-serif; font-size: 14px; line-height: 18px; color: #000000;" width="600">
<table border="0" cellpadding="2" cellspacing="0" style="font-family: arial, sans-serif; font-size: 12px; line-height: 20px; color: #000000;  border-top: 1px solid #000000" width="700" align="center">
	<tbody>
	  <tr>
			<td align="center" colspan="2" style="font-size: 18px; line-height: 18px; color: #000000; font-weight: bold" valign="top">
				<br />
				<u>RGA Request Form</u><br /><br><b style='color: red; font-size: 12px'>*</b> <b style='font-size: 12px'>Required field</b><br>
	</tbody>
</table>
<table border="0" cellpadding="0" cellspacing="4" style="font-family: arial, sans-serif; font-size: 12px; line-height: 14px; color: #000000" width="700">
	<tbody>
		<tr>
			<td align="center" valign="top">
				<b style='color: red'>*</b>Qty:</td>
			<td align="center" valign="top">
				<b style='color: red'>*</b>Parts:</td>
			<td align="center" valign="top">
				<b style='color: red'>*</b>Date:</td>
			<td align="center" valign="top" width="210">
				<b style='color: red'>*</b>Reason for Return:
				<br><span style='font-size: 10px'>(please explain in detail')</span>
		  </td>
		<tr>
			<td align="center" valign="top">
				<input id="quantity_01" name="quantity_01" size="6" type="text" value="" /></td>
			<td align="center" valign="top">
				<input id="parts_01" name="parts_01" size="35" type="text" value="" /></td>
			<td align="center" valign="top">
				<input id="date_code_01" name="date_code_01" size="7" type="text" value="" /></td>
			<td align="center" valign="top">
				<input id="return_reason_01" name="return_reason_01" size="25" type="text" value="" /></td>
			<td align="left" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" valign="top">
				<input name="quantity_02" size="6" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="parts_02" size="35" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="date_code_02" size="7" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="return_reason_02" size="25" type="text" value="" /></td>
			<td align="left" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" valign="top">
				<input name="quantity_03" size="6" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="parts_03" size="35" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="date_code_03" size="7" type="text"  value="" /></td>
			<td align="center" valign="top">
				<input name="return_reason_03" size="25" type="text" value=""  /></td>
			<td align="left" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" valign="top">
				<input name="quantity_04" size="6" type="text"  value="" /></td>
			<td align="center" valign="top">
				<input name="parts_04" size="35" type="text"  value="" /></td>
			<td align="center" valign="top">
				<input name="date_code_04" size="7" type="text"  value="" /></td>
			<td align="center" valign="top">
				<input name="return_reason_04" size="25" type="text"  value="" /></td>
			<td align="left" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" valign="top">
				<input name="quantity_05" size="6" type="text"  value="" /></td>
			<td align="center" valign="top">
				<input name="parts_05" size="35" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="date_code_05" size="7" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="return_reason_05" size="25" type="text" value="" /></td>
			<td align="left" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" valign="top">
				<input name="quantity_06" size="6" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="parts_06" size="35" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="date_code_06" size="7" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="return_reason_06" size="25" type="text" value="" /></td>
			<td align="left" valign="top">&nbsp;</td>
		</tr>
	</tbody>
</table>

<table border="0" cellpadding="4" cellspacing="0" style=" padding-left: 30px; padding-top: 20px;font-family: arial, sans-serif; font-size: 14px; line-height: 20px; color: #000000" width="700" >
	<tbody>
  &nbsp;&nbsp;Additional Comments:&nbsp;&nbsp;<textarea name="notes_int" cols="50" rows="4"></textarea></td>
		</tr>
	</tbody>
</table>
	<br />
<input name="submit_btn" type="submit" value="Submit" /></div>

<br><br />
<table border="0" cellpadding="0" cellspacing="0" style="padding-left: 50px; font-family: arial, sans-serif; font-size: 12px; line-height: 16px; color: #000000" width="700">
	<tbody>
		<tr>
			<td align="left" valign="top">
				<p>
					<b>1.</b> All returns are subject to inspection before any credit or replacements are issued. (Approx 6&ndash;8 week process).</p>
				<p>
					<b>2. <em>Credit for freight charges <u>will not</u> be given, debits for freight <u>will not</u> be accepted and <u>DEDUCTIONS OF ANY KIND WILL NOT BE ACCEPTED!</u></em></b></p>
				<p>
					<b>3.</b> No-Charge replacements will be shipped plus freight or you may pick-up at P&E Distributors warehouse.</p>
				<p>
					<b>4. <u>All returns must be approved prior to returning;</u></b> any returns sent back without prior approval will be denied.</p>
			</td>
		</tr>
	</tbody>
</table>
<br />
<br />


<script language="Javascript">
	
	
			
		function validateForm()
			{
			
				val_qty = document.getElementById("quantity_01").value;
				val_parts = document.getElementById("parts_01").value;
				val_date = document.getElementById("date_code_01").value;
				val_rr = document.getElementById("return_reason_01").value;;
				
				if(val_qty == "") {
					alert("QTY 1 is missing");
					return false;
				} else if(val_parts == "") {
					alert("Parts 1 is missing");
					return false;
				} else if(val_date == "") {
					alert("Date Code 1 is missing");
					return false;
				} else if(val_rr == "") {
					alert("Return reason 1 is missing");
					return false;
				} 
					
				

		}
</script>	
 	</div>
 </div>
<?php $this->end(); ?>
<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>