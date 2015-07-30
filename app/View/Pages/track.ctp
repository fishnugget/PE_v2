<?php $this->start('main'); ?>
<div class="main">

<div class="text-box">
<form name="tenn2" method="post" action="http://wwwapps.ups.com/WebTracking/OnlineTool" target="_new">
<img src="/img/topper_UPS.jpeg" width="100%" style="margin:.5em 0 1em 0">

<div class="row">
<?php if(!isset($user['A6'][0])){?>
	<div class="col"><strong>P&amp;E Customer Number:</strong></div>
    <?php } ?>
    <div class="rcol">
	<?php if(isset($user['A6'][0])){?>
    <input type="hidden" name="InquiryNumber" value="<?php if(isset($user['A6'][0])){echo $user['A6'][0];} ?>" size="22" class="style6" required="required"><?php }else{?>
    <input type="text" name="InquiryNumber" value="" size="22" class="style6" required="required">
	<?php }?>
    </div>
</div>
<div class="row" style="padding-top:5px">
	<div class="col"><strong>Show UPS shipments since:</strong></div><img src="/img/topbar/TrackingTruck.png" align="right" width="50%"/>
    <div class="rcol">
     <select class="style6" name="FromPickupMonth" size="1" style="width: 50px">
                          <option value="1" selected="">Jan 
                          </option><option value="2">Feb 
                          </option><option value="3">Mar 
                          </option><option value="4">Apr 
                          </option><option value="5">May 
                          </option><option value="6">Jun 
                          </option><option value="7">Jul 
                          </option><option value="8">Aug 
                          </option><option value="9">Sep 
                          </option><option value="10">Oct 
                          </option><option value="11">Nov 
                          </option><option value="12">Dec 
                        </option></select>

                        <select class="style6" name="FromPickupDay" size="1" style="width: 40px">
                          <option selected="">1 
                          </option><option>2 
                          </option><option>3 
                          </option><option>4 
                          </option><option>5 
                          </option><option>6 
                          </option><option>7 
                          </option><option>8 
                          </option><option>9 
                          </option><option>10 
                          </option><option>11 
                          </option><option>12 
                          </option><option>13 
                          </option><option>14 
                          </option><option>15 
                          </option><option>16 
                          </option><option>17 
                          </option><option>18 
                          </option><option>19 
                          </option><option>20 
                          </option><option>21 
                          </option><option>22 
                          </option><option>23 
                          </option><option>24 
                          </option><option>25 
                          </option><option>26 
                          </option><option>27 
                          </option><option>28 
                          </option><option>29 
                          </option><option>30 
                          </option><option>31 
                        </option></select>

                        <select class="style6" name="FromPickupYear" size="1" style="width: 55px">
                          <option>2013</option>
                          <option selected="">2014</option>
                        </select>
    </div>
</div>

<div class="row" style="padding-top:5px">
	<div class="col"><strong>Shipped From:</strong></div>
    <div class="rcol" style="font-size:14px"><select name="SenderShipperNumber" class="style6">
                          <option value="311911">Goodlettsville, TN</option>
                          <option value="336223">Birmingham, AL</option>
                          <option value="45629X">Marietta, GA</option>

                                                </select>
	</div>
</div>
<div class="row">
	<div class="col" style="color:#E80000; border:.5px #E0E0E0 dashed;"></div>
    <div class="rcol" style="font-size:14px;"><input name="Log In" type="image" value="Track this package" src="/img/topbar/go_button.png" style="padding-top:5px" border="0">
    </div>
</div>

                       
                        <input type="hidden" name="nonUPS_body" value="BGCOLOR=&quot;#EEEEEE&quot;">
                        <input type="hidden" name="UPS_HTML_License" value="Your Access Key">
                        <input type="hidden" name="UPS_HTML_Version" value="3.0">
                        <input type="hidden" name="TypeOfInquiryNumber" value="R">
                       
                      </form>
             
</div></div>
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>