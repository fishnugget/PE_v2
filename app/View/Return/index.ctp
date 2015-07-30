<?php $this->start('main'); ?>
<?php // echo $this->Html->css('form'); ?>
<?php //echo $this->Html->css('register'); ?>
<div>
<form action="/returns/add" onsubmit="return validateForm()" id="Returns" method="POST">
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
				<b style='color: red'>*</b>Part Number:</td>
			<td align="center" valign="top">
				<b style='color: red'>*</b>Brand:</td>
			<td align="center" valign="top" width="210">
				<b style='color: red'>*</b>Reason for Return:
				<br><span style='font-size: 10px'>(please explain in detail')</span>
		  </td>
		<tr>
			<td align="center" valign="top">
				<input id="quantity_02" name="data[Returns][1][quantity]" size="6" type="text" value="" /></td>
			<td align="center" valign="top">
				<input id="parts_02" name="data[Returns][1][parts]" size="35" type="text" value="" /></td>
			<td align="center" valign="top">
            <input name="data[Returns][1][brand]" update="autoCompleteDiv1" autoCompleteText="1" autoCompleteUrl="/search/auto_complete" autoCompleteRequestItem="autoCompleteText" type="text" id="linecode" size="7" autocomplete="off" value="" /><div id="autoCompleteDiv1" class="autoCompleteDiv" />
				</td>
			<td align="center" valign="top">
				<input id="return_reason_02" name="data[Returns][1][return reason]" size="25" type="text" value="" /></td>
			<td align="left" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" valign="top">
				<input id="quantity_03" name="data[Returns][2][quantity]" size="6" type="text" value="" /></td>
			<td align="center" valign="top">
				<input id="parts_03" name="data[Returns][2][parts]" size="35" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="data[Returns][2][brand]" update="autoCompleteDiv2" autoCompleteText="1" autoCompleteUrl="/search/auto_complete" autoCompleteRequestItem="autoCompleteText" type="text" id="linecode" size="7" autocomplete="off" value="" /><div id="autoCompleteDiv2" class="autoCompleteDiv" /></td>
			<td align="center" valign="top">
				<input id="return_reason_03" name="data[Returns][2][return reason]" size="25" type="text" value=""  /></td>
			<td align="left" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" valign="top">
				<input id="quantity_04" name="data[Returns][3][quantity]" size="6" type="text"  value="" /></td>
			<td align="center" valign="top">
				<input id="parts_04" name="data[Returns][3][parts]" size="35" type="text"  value="" /></td>
			<td align="center" valign="top">
				<input name="data[Returns][3][brand]" update="autoCompleteDiv3" autoCompleteText="1" autoCompleteUrl="/search/auto_complete" autoCompleteRequestItem="autoCompleteText" type="text" id="linecode" size="7" autocomplete="off" value="" /><div id="autoCompleteDiv3" class="autoCompleteDiv" /></td>
			<td align="center" valign="top">
				<input id="return_reason_04" name="data[Returns][3][return reason]" size="25" type="text"  value="" /></td>
			<td align="left" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" valign="top">
				<input id="quantity_05" name="data[Returns][4][quantity]" size="6" type="text"  value="" /></td>
			<td align="center" valign="top">
				<input id="parts_05" name="data[Returns][4][parts]" size="35" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="data[Returns][4][brand]" update="autoCompleteDiv4" autoCompleteText="1" autoCompleteUrl="/search/auto_complete" autoCompleteRequestItem="autoCompleteText" type="text" id="linecode" size="7" autocomplete="off" value="" /><div id="autoCompleteDiv4" class="autoCompleteDiv" /></td>
			<td align="center" valign="top">
				<input id="return_reason_05" name="data[Returns][4][return reason]" size="25" type="text" value="" /></td>
			<td align="left" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" valign="top">
				<input id="quantity_06" name="data[Returns][5][quantity]" size="6" type="text" value="" /></td>
			<td align="center" valign="top">
				<input id="parts_06" name="data[Returns][5][parts]" size="35" type="text" value="" /></td>
			<td align="center" valign="top">
				<input name="data[Returns][5][brand]" update="autoCompleteDiv5" autoCompleteText="1" autoCompleteUrl="/search/auto_complete" autoCompleteRequestItem="autoCompleteText" type="text" id="linecode" size="7" autocomplete="off" value="" /><div id="autoCompleteDiv5" class="autoCompleteDiv" /></td>
			<td align="center" valign="top">
				<input id="return_reason_06" name="data[Returns][5][return reason]" size="25" type="text" value="" /></td>
			<td align="left" valign="top">&nbsp;</td>
		</tr>
	</tbody>
</table>

<table border="0" cellpadding="4" cellspacing="0" style=" padding-left: 30px; padding-top: 20px;font-family: arial, sans-serif; font-size: 14px; line-height: 20px; color: #000000" width="700" >
	<tbody>
  &nbsp;&nbsp;Additional Comments:&nbsp;&nbsp;<textarea id="notes_int" name="data[Returns][0][additional comments]" cols="50" rows="4"></textarea></td>
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
					<b>1.</b> All returns are subject to inspection before any credit or replacements are issued.</p>
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
 	
<?php $this->end(); ?>
<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>