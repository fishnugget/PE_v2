<div id="headerFrameSectionFour">
<br /><i class="fa fa-user fa-fw"></i> <?php echo $user['BT'][0]; ?>
            <div id="headerFrameCartCheckoutContainer" class="whiteCartWithCheckout clearfix">
                <a href="/cart/" id="headerCartLogoLink">Shopping Cart</a>
                <a href="/cart/" id="headerCartTextLink">
                    <span class="headerCartDesc">Cart&nbsp;(</span>
                    <span id="headerCartItemCount">
					<?php 
					$cart_count=(count($cart['items']));
					switch ($cart_count) {
					   case 0:
							 $cart_msg="empty";
							 break;
					   case 1:
							 $cart_msg="1 item";
							 break;
					   case ($cart_count > 1):
							 $cart_msg= $cart_count." items";
							 break;
							 }
					echo $cart_msg."&nbsp;)"; ?>
					</span>
                    <span class="headerCartDivider">&nbsp;</span>
                    <span id="headerCartTotal"><?php if(!empty($cart['total'])){echo "$".$cart['total'];}?></span>
                </a>
                <?php if($cart_count>=1){?>
                 <a href="/cart/checkout" id="headerCartCheckoutLink">Checkout Now</a>
                 <?php } ?>
            </div>
            
             
<div id="headerFrameSearchContainer">
<?php if(!empty($user)): echo $this->Element('search'); endif;?>
<?php 
/*
if (!empty($results)) {?>
	<?php if(!empty($user)): echo $this->Element('search'); endif;
}elseif($this->request->here !== '/users/members'){if(!empty($user)): echo $this->Element('search'); endif;}else{echo '<div id="member_nav" style="margin:-70px auto auto -320px;"><h1>1-800-251-2034</h1></div>';}*/?>
    
</div>
  
        </div>