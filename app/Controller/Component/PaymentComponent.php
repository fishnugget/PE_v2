<?php
class PaymentComponent extends Component {
	var $controller;
	function initialize(&$controller) {
		$this->controller =& $controller;
		require_once(APP . 'Vendor' . DS . 'UsaEpay' . DS. 'usaepay.php');
	}
	function make($data){
		$card = str_replace(array(' ', '-'), '', $data['card_num']);
		$tran=new umTransaction;
		$tran->key="eA7gHfRO94vcd4KIwNLIIYsQ3kxUa3Bv";//"pe web site" - was Dx0hlXp9pGlpj9FsrMt0rz2O50w03CE6 (quick sale)
		$tran->ip=$_SERVER['REMOTE_ADDR'];   // This allows fraud blocking on the customers ip address	 
		$tran->testmode=0;    // Change this to 0 for the transaction to process
		$tran->card=$card;		// card number, no dashes, no spaces
		$tran->exp=$data['exp_month'].$data['exp_year'];			// expiration date 4 digits no /
		$tran->amount=$this->controller->cart['total'] + $this->controller->cart['Shipping']['charge'];			// charge amount in dollars
		$tran->invoice=$this->controller->user['A6'][0];//rand();   
		//LIES->// invoice number.  must be unique.
		$tran->cardholder=$data['billing_name']; 	// name of card holder
		$tran->street=$data['address1'];	// street address
		$tran->zip=$data['zip'];			// zip code
		$tran->description="Company: ".$this->controller->user['BT'][0]; // Company name
		$tran->ponum=$this->controller->cart['po_number'];
		$tran->cvv2=$data['ccv'];			// cvv2 code	
		flush();
		$tran->Process();
		return $tran;
	}
/* 3/28/14
MJ - remake created to run cards previously used by customer
*/
		function remake(){
		$tran=new umTransaction;
		$tran->refnum=$this->controller->CC['refnum'];
		$tran->key="YuFvOqWk7DP0fHo2sYKUDY16q0oyV0Gt";//"pe web site" - was Dx0hlXp9pGlpj9FsrMt0rz2O50w03CE6 (quick sale)
		$tran->pin="5989";
		$tran->ip=$_SERVER['REMOTE_ADDR'];   // This allows fraud blocking on the customers ip address	 
		$tran->testmode=0;    // Change this to 0 for the transaction to process
		$tran->amount=$this->controller->cart['total'] + $this->controller->cart['Shipping']['charge'];			// charge amount in dollars
		$tran->invoice=$this->controller->user['A6'][0];//rand();   
		$tran->description="Company: ".$this->controller->user['BT'][0]; // Company name
		$tran->ponum=$this->controller->cart['po_number'];
		flush();
		$tran->ProcessQuickSale();
		return $tran;
	}
}