<?php $this->start('main'); ?>
<div style="height:300px;width:100%;">
	<div style="padding:1em; margin:2em 0 0 2em; border:1px #000000 solid; float:left; background:#efefef; width:75%">
	
<div style="margin:0; text-align:right">
		
			<form id="listBuilderForm" name="login_form" method="POST">
			<input type="hidden" name="form_action" value="login">
			<table style="margin-right:1em">
				<tbody>
				<tr>
				<td>User I.D. #:</td><td style="text-align:left;"> <input type="text" name="username" id="username" value="" size="24" required="required"></td>
				</tr>
				<tr>
				<td>Password:</td><td style="text-align:left"><input type="password" name="password" value="" size="24" required="required"></td>
				</tr>
				<tr>  
				<td></td><td><input type="image" src="/img/buttons/login_button.png" name="Log In" border="0" style="margin-top:.5em" class="loginButton"></td>
				</tr>
                
				<tr><td colspan="2"><a href="/contact/">
				<font size="1">Please Call if you are having trouble logging in.</font></a></td></tr>
				</tbody>
			</table>
			</form>
		</div>