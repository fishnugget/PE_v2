<?php $this->start('main'); ?>
<div class="main">
<div class="title" style="width: 35%; clear: left; float: left; margin-top: 0;">P&amp;E : The Show 2013</div>
<div class="title" style="background-image: url('images/bg/grey.jpg'); text-align: left; margin-left: .25em; margin-top: 0;">Online Registration</div>
<div id="small_menu">&nbsp;</div>
<div style="float: left; clear: both; width: 100%; text-align: left; padding: 1em; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">Avoid wasting valuable shopping time at the Registration Desk the day of the show. Pre-register each of your company's representatives in advance for prompt admission. You can register online below, by phone at 800-251-2034, or after filling in the required information below, print and fax the completed form to 615-851-4053.</div>
<div style="clear: both; width: 100%; background-color: #cccccc; text-align: left;"><!--?php if(empty($_POST['theshow_register'])){?--><form method="post" action=mailto:bclark@pedistributors.com name="registration">
<table style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; width: 100%;" cellspacing="10">
<tbody>
<tr>
<td style="text-align: center; font-size: 16px;" colspan="4">Registration Information</td>
</tr>
<tr>
<td style="text-align: right;">Company Name:</td>
<td style="text-align: left;"><input type="text" name="Company_Name" size="20" /></td>
<td style="text-align: right;">Customer Number:</td>
<td style="text-align: left;"><input type="text" name="Customer_Number" size="20" /></td>
</tr>
<tr>
<td style="text-align: right;">Address:</td>
<td style="text-align: left;" colspan="3"><input type="text" name="Address" size="70%" /></td>
</tr>
<tr>
<td style="text-align: right;">City:</td>
<td style="text-align: left;"><input type="text" name="City" size="20" /></td>
<td style="text-align: right;">State:</td>
<td style="text-align: left;"><input type="text" name="State" size="5" /></td>
</tr>
<tr>
<td style="text-align: right;">&nbsp;</td>
<td style="text-align: left;">&nbsp;</td>
<td style="text-align: right;">Zip Code:</td>
<td style="text-align: left;"><input type="text" name="Zip_Code" size="10" /></td>
</tr>
<tr>
<td style="text-align: right;">Contact Name:</td>
<td style="text-align: left;"><input type="text" name="Contact_Name" size="20" /></td>
<td style="text-align: right;">Phone Number:</td>
<td style="text-align: left;"><input type="text" name="Phone_Number" size="20" /></td>
</tr>
</tbody>
</table>
<table style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; margin-top: 2em; width: 100%;">
<tbody>
<tr>
<td style="text-align: center; font-size: 11px;" colspan="4">Please enter each person that will attend the show</td>
</tr>
<tr>
<td style="text-align: center;">Name</td>
<td style="text-align: center;">Title</td>
<td style="text-align: center;" colspan="2">Has Authority to Purchase?</td>
</tr>
<tr>
<td style="text-align: center;"><input type="text" name="attendee1_name" size="20" /></td>
<td style="text-align: center;"><input type="text" name="attendee1_title" size="20" /></td>
<td style="text-align: center;"><input type="radio" name="attendee1_auth" value="Yes" /><br /> Yes</td>
<td style="text-align: center;"><input type="radio" name="attendee1_auth" value="No" /><br /> No</td>
</tr>
<tr>
<td style="text-align: center;"><input type="text" name="attendee2_name" size="20" /></td>
<td style="text-align: center;"><input type="text" name="attendee2_title" size="20" /></td>
<td style="text-align: center;"><input type="radio" name="attendee2_auth" value="Yes" /><br /> Yes</td>
<td style="text-align: center;"><input type="radio" name="attendee2_auth" value="No" /><br /> No</td>
</tr>
<tr>
<td style="text-align: center;"><input type="text" name="attendee3_name" size="20" /></td>
<td style="text-align: center;"><input type="text" name="attendee3_title" size="20" /></td>
<td style="text-align: center;"><input type="radio" name="attendee3_auth" value="Yes" /><br /> Yes</td>
<td style="text-align: center;"><input type="radio" name="attendee3_auth" value="No" /><br /> No</td>
</tr>

<tr>
<td style="text-align: center;"><input type="text" name="attendee4_name" size="20" /></td>
<td style="text-align: center;"><input type="text" name="attendee4_title" size="20" /></td>
<td style="text-align: center;"><input type="radio" name="attendee4_auth" value="Yes" /><br /> Yes</td>
<td style="text-align: center;"><input type="radio" name="attendee4_auth" value="No" /><br /> No</td>
</tr>
<tr>
<td style="text-align: center;"><input type="text" name="attendee5_name" size="20" /></td>
<td style="text-align: center;"><input type="text" name="attendee5_title" size="20" /></td>
<td style="text-align: center;"><input type="radio" name="attendee5_auth" value="Yes" /><br /> Yes</td>
<td style="text-align: center;"><input type="radio" name="attendee5_auth" value="No" /><br /> No</td>
</tr>
<tr>
<td style="text-align: center;"><input type="text" name="attendee6_name" size="20" /></td>
<td style="text-align: center;"><input type="text" name="attendee6_title" size="20" /></td>
<td style="text-align: center;"><input type="radio" name="attendee6_auth" value="Yes" /><br /> Yes</td>
<td style="text-align: center;"><input type="radio" name="attendee6_auth" value="No" /><br /> No</td>
</tr>
<tr>
<td style="text-align: center;"><input type="text" name="attendee7_name" size="20" /></td>
<td style="text-align: center;"><input type="text" name="attendee7_title" size="20" /></td>
<td style="text-align: center;"><input type="radio" name="attendee7_auth" value="Yes" /><br /> Yes</td>
<td style="text-align: center;"><input type="radio" name="attendee7_auth" value="No" /><br /> No</td>
</tr>
<tr style="background-color: #000000;">
<td style="text-align: center; font-size: 18px; color: #cccccc;" colspan="2"><a style="color: #ffffff;" onclick="document.registration.submit();" href="javascript:if(window.print)window.print()" target="_blank">Print this to fax</a></td>
<td colspan="2" style="text-align:center; font-size:18px; color:#CCCCCC"><a href="#" onclick="sendandmail();" style="color:#CCCCCC">Submit Electronically >></a></td></tr>
</tr>
</tbody>
</table>
<input type="hidden" name="theshow_register" value="add" /></form></div>
<?php
?>
</div>
</div>
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>