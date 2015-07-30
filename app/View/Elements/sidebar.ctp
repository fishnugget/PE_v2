<?php
echo $this->Html->css('sidebar');
//echo $this->Html->css('12vNav');
?>
<?php if(empty($user)): ?>

<div style="float:left; id="loginbox">
			<form id="LOGIN" name="login_form" method="POST" action="/login">
			<input type="hidden" name="form_action" value="login">
			<table style="margin-right:1em">
				<tbody>
				<tr>
				User I.D. #:<br /><input type="text" id="username" name="username" value="" size="24" required="required" placeholder="Enter username">
				</tr>
				<tr>
				Password:<br /><input type="password" name="password" value="" size="24" required="required" placeholder="Enter password">
				</tr>
				<tr>  
				<center><input type="submit" value="Sign In" name="Log In" border="0" class="loginButton" style="margin: 10px 0 10px 0;"></center>
				</tr>
				<tr><td colspan="2"><a href="http://www.pedistributors.com/login/reminder">
				<font size="1">Forgot Login Info?</font></a></td></tr>
				</tbody>
			</table>
			</form>
            </div>
<?php endif; 
if(!empty($user)): echo  '<strong>Year/Make/Model Search</strong><br><script type="text/javascript" src="http://pedistributors.v12.catalograck.com/scripts/dciframes.js"></script><iframe id="ifVehicleModule" width="210" height="130" frameborder="0" name="ifVehicleModule" src="" scrolling="no"></iframe>'; endif;?>

<ul class="sidebar-list">
<img src="/img/banners/PE-Skyscraper150x450.png" border="0">
    <!-- <a href="http://www.pedistributors.com/?p=show"><img src="/img/leftskyscraper.jpg" border="0"></a>
	    
    <li><a href="#" style="border:0"><img src="images/buttons/twit_button.jpg"  border="0"/></a></li>
	-->
</ul>
