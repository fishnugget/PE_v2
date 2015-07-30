<!-- NEWSLETTER SIGN UP -->
<section class="newsletter">
<form method="post" action="https://app.icontact.com/icp/signup.php" name="icpsignup" id="icpsignup6317" accept-charset="UTF-8" onSubmit="return verifyRequired6317();" >
<input type="hidden" name="redirect" value="http://stage.pedistributors.com/thankyou">
<input type="hidden" name="errorredirect" value="http://www.icontact.com/www/signup/error.html">

<div id="SignUp">
<table width="600px" class="signupframe" border="0" cellspacing="0" cellpadding="5">
	<tr>
      <td width="43" align="right" valign="top">
        <span class="required">*</span> Email
      </td>
      <td width="233" align="left">
        <input type="text" name="fields_email">
      </td>
    </tr>
    <tr>
      <td valign="top" align="right">
        <span class="required">*</span> Lists
      </td>
      <td>
        <input type="hidden" name="listid" value="__multi">
        <input type="hidden" name="lists" value="90743:90744:90745">
        <input type="hidden" name="specialid:90743" value="35I2">
        <input type="checkbox" id="listid:90743" name="listid:90743"> <label for="listid:90743">Performance Specials and Information</label><br>
        <input type="hidden" name="specialid:90744" value="DMCX">
        <input type="checkbox" id="listid:90744" name="listid:90744"> <label for="listid:90744">Truck Specials and Information</label><br>
        <input type="hidden" name="specialid:90745" value="4AP3">
        <input type="checkbox" id="listid:90745" name="listid:90745"> <label for="listid:90745">Electronics Specials and Information</label><br>
      </td>
    </tr>
    <input type="hidden" name="clientid" value="454027">
    <input type="hidden" name="formid" value="6317">
    <input type="hidden" name="reallistid" value="1">
    <input type="hidden" name="doubleopt" value="0">
    <tr>
      <td> </td>
      <td><span class="required">*</span> = Required Field</td>
    </tr>
    <tr>
      <td> </td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
    </table>
</div>
</form>
<script type="text/javascript">

var icpForm6317 = document.getElementById('icpsignup6317');

if (document.location.protocol === "https:")

	icpForm6317.action = "https://app.icontact.com/icp/signup.php";
function verifyRequired6317() {
  if (icpForm6317["fields_email"].value == "") {
    icpForm6317["fields_email"].focus();
    alert("The Email field is required.");
    return false;
  }

    if (
      !icpForm6317["listid:90743"].checked &&
      !icpForm6317["listid:90744"].checked &&
      !icpForm6317["listid:90745"].checked &&
      true)  {
    alert("The Lists field is required.");
    return false;
  } 

return true;
}
</script>


	<small>*Unsubscribe at anytime, click "Manage my Subscription" at the bottom of one our emails.</small>

<!-- NEWSLETTER SIGN UP END -->