<?php
echo $this->Html->css('nivo-slider.css');
echo $this->Html->script('jquery.nivo.slider.pack.js');
?>
		<div id="header">
		<a href="/" id="logoBackdrop">		
	<!--	<a href="/" id="main-logo"></a>-->
		</a>

<?php
//lunch add
 /*if(empty($user)):  ?>

<div style="float:right" id="loginbox">
                        <form id="LOGIN" name="login_form" method="POST" action="/login">
                        <input type="hidden" name="form_action" value="login">
                        <table style="margin-right:1em">
                                <tbody>
                                <tr>
                                Login:<br /><input type="text" id="username" name="username" value="" size="24" required="required" class="enterastab">
                                </tr>
                                <tr>
                                <br />Password:<br /><input type="password" name="password" value="" size="24" required="required">
                                </tr>
                               <tr><td colspan="2"><a href="http://www.pedistributors.com/login/reminder">
                                <font size="1">Forgot Login Info?</font></a></td></tr> 
				<tr>  
                                <center><input type="image" src="/img/buttons/login.jpg" name="Log In" border="0" class="loginButton"></center>
                                </tr>
                                </tbody>
                        </table>
                        </form>
            </div>
<?php endif; 
/*if(!empty($user)): echo  '<strong>Year/Make/Model Search</strong><br><script type="text/javascript" src="http://pedistributors.v12.catalograck.com/scripts/dciframes.js"></script><iframe id="ifVehicleModule" width="210" height="130" frameborder="0" name="ifVehicleModule" src="" scrolling="no"></iframe>'; endif;*/
// end of lunch add
?>

		<div id="top-nav"> 
        
                <?php /*
					<ul id="top-nav-list">
                   		<li><a href="/track"><img src="/img/topnav-track.jpg"></a></li>
                    	<li><a href="/whyPE"><img src="/img/topnav-why.jpg"></a></li>
						<li><a href="/about"><img src="/img/topnav-about.jpg"></a></li>
						<?php if(empty($user)): ?>
						<li><a href="/credit/add"><img src="/img/topnav-register.jpg"></a></li>
						<?php endif; ?>
						<li><a href="/linecard/all"><img src="/img/topnav-manu.jpg"></a></li>
						<li><a href="/contact"><img src="/img/topnav-contact.jpg"></a></li>
						*/?>
                         <?php if(empty($user)): ?>
						<?php endif; ?>
						<?php /*
						<?php if(!empty($cart['items'])): ?>
							<li style="float:right; border-left: 1px solid white; font-size: 10px;"><a href="/cart"><?php echo count($cart['items']); ?> item(s) in your cart.</a> <a href='/cart/checkout' style="color: red; padding:5px; background: black;">CHECKOUT</a></li>
						<?php endif; 
					</ul>*/?>
					<?php if(!empty($user)):  ?>
					
					<div id="logged_in_box" style="float: right; clear: right; margin: 0px 0; padding: 0px; font-size: 12px;">
						<span style="padding:0; float:right; clear:both; vertical-align:top;">
					    	        
					        		<div style="font-size:1.1em;font-weight:bold;">
									<?php echo $this->Element('headercart');?>
					    	         </strong></div>
					    </span>
					</div>
				<?php endif; ?>
			</div>
            
		</div>
