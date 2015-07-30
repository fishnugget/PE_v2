<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email', 'Order');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class CartController extends AppController {
/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Cart';
/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Billing');
	public $components = array('Search', 'Cart', 'Payment');
	public function beforeFilter(){
		parent::beforeFilter();
		$this->disableCache();//MJ added 10-1 for disabling errors on back button
		$this->cart = $this->Session->read('cart');
		$this->CC = $this->Session->read('CC');
		//if($_SERVER['REMOTE_ADDR']=="64.16.163.165"){
		//debug($this->cart);}
		//echo $_SERVER['REMOTE_ADDR'];
		if(!empty($this->cart['messages'])){
			foreach($this->cart['messages'] as $key=>$msg){
				$this->Session->setFlash(__($msg), 'default', array('class' => 'failure'));
			}
			$this->Cart->deleteMessages();
		}
	}
	public function afterRender(){
		//$this->Session->write('cart', $this->cart);
	}
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function index(){
		//debug($this->request->data);
###FOR DCI LOOKUP PART 1 of 2
		if(!empty($this->request->data['parts']) && !empty($this->request->data['submit_additions'])){
			//$this->set('dci_search', $this->request->data['parts']);
			//debug ($this->dci_search);
			$key = array_search('1', $this->request->data['parts']);
			$data['login']		= $this->user['BS'][0];//$this->request->data['hdnb2b'];
			$data['partnumber']	= $key;
			$full_part = $key;
			$search_results = $this->Search->search($data);
			if(!empty($search_results->DR[0][12])){
					$Jobber = $search_results->DR[0][12];
					}else if(!empty($part[11])){ $Jobber = $search_results->DR[0][11];
					}else{ $Jobber = 'N/A'; };
			if($full_part){
			    		$search_results->DR[0][1] = substr($full_part,0,3);
			    	}
			$results[0] = array(
					'FullPart' => $full_part,
					'Line' => $search_results->DR[0][1],
					'AAIA' =>$this->requestAction('/search/aaiaconvert', array(
						'pass' => array($search_results->DR[0][1]))),
					'PartNumber' => $search_results->DR[0][2],
					'Description' => $search_results->DR[0][5],
					'QtyAvailable' => $search_results->DR[0][6],
					'Retail' => $search_results->DR[0][7],
					'YourPrice' => $search_results->DR[0][9],
					'Jobber' => $Jobber);
			if($results && $results->PartNumber !== ''){
			    	$this->Session->write('search', $results);
				    $this->set('results', $results);
			$this->add($this->request->data['parts']);
			}
		}
###END PART 1 of 2 DCI LOOKUP
		if(empty($this->cart['items'])){
			//TESTING $this->Session->setFlash(__(print_r(get_defined_vars())), 'default', array('class' => 'failure'));
			if(!empty($this->request->data['submit_additions'])){
				$this->Session->setFlash(__("$results[0][FullPart] is currently out of stock. <br>Please call your salesman to order."), 'default', array('class' => 'failure'));
			$this->cart['messages'][] = "$results[0][FullPart] is currently out of stock. <br>Please call your salesman to order.";}else{

			$this->Session->setFlash(__("Your cart is empty."), 'default', array('class' => 'failure'));}
			$this->redirect('/cart/checkout');//changed 1-24-14was /search
		}else{
			$this->set('cart', $this->cart);
		}
	}
	public function add(){
		if(!empty($this->request->data)){
		if(!empty($this->request->data['action']) && $this->request->data['action'] == 'update'){
			$update = true;
			$parts=$this->cart['items'];
		}else{
			$update = false;
			$parts = $this->Session->read('search');
			//$parts = $parts->DR;
		}
			//$new_parts = array(); MJ commented out (no use) 9-9-13
			//Fix to allow all part quantities to be updated
			$quantity_exceeded = false;
			foreach($this->request->data['parts'] as $partnumber => $qty){
				foreach($parts as $search_key => $search_part){
					//debug($search_part);
					if($partnumber == $search_part['FullPart']){
						if($update == false && $qty > '0'){
							$new_item = $this->Cart->add($search_part, $qty, $update);
						}else if($update == true){
							$new_item = $this->Cart->add($search_part, $qty, $update);
						}
					}
				}
		/*	print_r($new_item);*/}###FOR DCI LOOKUP PART 2 of 2 (hdnb2b redirect)
		//MJ 1-27-14 commented out three lines for redirect
			//if(!empty($this->request->data['hdnb2b'])){/*unset($this->request->data);*/ $this->redirect('/cart/checkout') ;
			//}else{
			//$this->redirect($this->referer());}
			$this->redirect('/cart/checkout');
		}
	}
	public function checkout(){
		if(empty($this->cart['items'])){
			//TESTING $this->Session->setFlash(__(print_r(get_defined_vars())), 'default', array('class' => 'failure'));
			//Removed below 2-26-14, overwrites Account Over Limit message
			//$this->Session->setFlash(__("Your cart is empty."), 'default', array('class' => 'failure'));
			$this->redirect('/search');
			}
		//$this->cart['Shipping']['charge'] = $this->Cart->getShipping($this->cart['total']);
		$this->cart['Shipping']['charge'] = 0;
		$this->Session->write('cart', $this->cart);
	}
	public function charge(){
		//$this->cart['Shipping']['charge'] = $this->Cart->getShipping($this->cart['total']);\
    $todayorders = $this->Order.find('count', array(
      'conditions' => array('Order.customer' => $this->user['BS'][0],
                            'Order.order_date >=' => date('Y-m-d 00:00:00'),
                            'Order.order_date <' => date('Y-m-d 00:00:00', strtotime('+1 day')))
    ));
    if ($todayorder == 0) {
      $this->cart['Shipping']['charge'] = 30.00;
    }
		$us_state_abbrevs_names = array(
			'AL'=>'ALABAMA',
			'AK'=>'ALASKA',
			'AS'=>'AMERICAN SAMOA',
			'AZ'=>'ARIZONA',
			'AR'=>'ARKANSAS',
			'CA'=>'CALIFORNIA',
			'CO'=>'COLORADO',
			'CT'=>'CONNECTICUT',
			'DE'=>'DELAWARE',
			'DC'=>'DISTRICT OF COLUMBIA',
			'FM'=>'FEDERATED STATES OF MICRONESIA',
			'FL'=>'FLORIDA',
			'GA'=>'GEORGIA',
			'GU'=>'GUAM GU',
			'HI'=>'HAWAII',
			'ID'=>'IDAHO',
			'IL'=>'ILLINOIS',
			'IN'=>'INDIANA',
			'IA'=>'IOWA',
			'KS'=>'KANSAS',
			'KY'=>'KENTUCKY',
			'LA'=>'LOUISIANA',
			'ME'=>'MAINE',
			'MH'=>'MARSHALL ISLANDS',
			'MD'=>'MARYLAND',
			'MA'=>'MASSACHUSETTS',
			'MI'=>'MICHIGAN',
			'MN'=>'MINNESOTA',
			'MS'=>'MISSISSIPPI',
			'MO'=>'MISSOURI',
			'MT'=>'MONTANA',
			'NE'=>'NEBRASKA',
			'NV'=>'NEVADA',
			'NH'=>'NEW HAMPSHIRE',
			'NJ'=>'NEW JERSEY',
			'NM'=>'NEW MEXICO',
			'NY'=>'NEW YORK',
			'NC'=>'NORTH CAROLINA',
			'ND'=>'NORTH DAKOTA',
			'MP'=>'NORTHERN MARIANA ISLANDS',
			'OH'=>'OHIO',
			'OK'=>'OKLAHOMA',
			'OR'=>'OREGON',
			'PW'=>'PALAU',
			'PA'=>'PENNSYLVANIA',
			'PR'=>'PUERTO RICO',
			'RI'=>'RHODE ISLAND',
			'SC'=>'SOUTH CAROLINA',
			'SD'=>'SOUTH DAKOTA',
			'TN'=>'TENNESSEE',
			'TX'=>'TEXAS',
			'UT'=>'UTAH',
			'VT'=>'VERMONT',
			'VI'=>'VIRGIN ISLANDS',
			'VA'=>'VIRGINIA',
			'WA'=>'WASHINGTON',
			'WV'=>'WEST VIRGINIA',
			'WI'=>'WISCONSIN',
			'WY'=>'WYOMING',
			'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
			'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
			'AP'=>'ARMED FORCES PACIFIC'
		);
		$this->set('states', $us_state_abbrevs_names);
		if(!empty($this->request->data)){
			$this->request->data['Billing']['exp_month'] = $this->request->data['Billing']['exp_month']['month'];
			$this->Billing->set( $this->data );
			if ($this->Billing->validates()) {
				$this->cart['Billing'] = $this->request->data['Billing'];
				unset($this->cart['Billing']['card_num']);
				unset($this->cart['Billing']['ccv']);
				$payment = $this->Payment->make($this->data['Billing']);
				$this->set('payment', $payment);
				if($payment->result=='Approved'){
					$new_order = $this->Cart->placeOrder();
					if(!empty($new_order->status) && $new_order->status == 'FAIL'){
						$this->Session->setFlash(__("Order failed.  $new_order->reason.  Please try again."), 'default', array('class' => 'failure'));
						$this->redirect('/cart/confirm');
					}else{
            $ordrec = new $this->Order();
            $ordrec->set('customer', $this->user['BS'][0]);
            $ordrec->save();
						$this->set('order', $new_order);
						$this->set('cart', false);
						$this->set('receipt', $this->cart);
						$this->set('user', $this->user);
						$this->Session->delete('cart');
						$this->autoRender = false;
						$this->render('receipt');
					}
				}else{
					$this->Session->setFlash(__($payment->error), 'default', array('class' => 'failure'));
					return false;
				}
			} else {
				$this->Session->setFlash(__('Please check your payment information'), 'default', array('class' => 'failure'));
			 	return false;
			}
		}else if(isset($this->cart['Billing'])){
			$this->request->data['Billing'] = $this->cart['Billing'];
		}
		if(empty($this->cart['Shipping'])){
			$this->Session->setFlash(__("Please Select Your Shipping Address."), 'default', array('class' => 'failure'));
			$this->redirect('/cart/shipping');
		}
	}
	public function recharge(){
	if (!$this->cart){$this->redirect('/users/account/#tabs-2');}	//$this->cart['Shipping']['charge'] = $this->Cart->getShipping($this->cart['total']);\
    $todayorders = $this->Order.find('count', array(
      'conditions' => array('Order.customer' => $this->user['BS'][0],
                            'Order.order_date >=' => date('Y-m-d 00:00:00'),
                            'Order.order_date <' => date('Y-m-d 00:00:00', strtotime('+1 day')))
    ));
    if ($todayorder == 0) {
      $this->cart['Shipping']['charge'] = 0.02;
    }
				$payment = $this->Payment->remake();
//debug($payment);
				$this->set('payment', $payment);
				if($payment->result=='Approved'){
					$new_order = $this->Cart->placeOrder();
					if(!empty($new_order->status) && $new_order->status == 'FAIL'){
						$this->Session->setFlash(__("Order failed.  $new_order->reason.  Please try again."), 'default', array('class' => 'failure'));
						$this->redirect('/cart/confirm');
					}else{
            $ordrec = new $this->Order();
            $ordrec->set('customer', $this->user['BS'][0]);
            $ordrec->save();
						$this->set('order', $new_order);
						$this->set('cart', false);
						$this->set('receipt', $this->cart);
						$this->set('user', $this->user);
						$this->Session->delete('cart');
						$this->autoRender = false;
						$this->render('receipt');
					}
				}else{
					$this->Session->setFlash(__($payment->error), 'default', array('class' => 'failure'));
					$this->redirect('/cart/checkout');
				}
	}
	public function clear(){
		$this->Session->delete('cart');
		$this->Session->setFlash(__("Your cart has been emptied."), 'default', array('class' => 'failure'));
		$this->redirect('/search');
	}
	public function update(){
		if(!empty($this->request->data)){
			//debug($this->request->data);
			//debug($this->cart);
			exit();
			foreach($this->request->data['parts'] as $partnumber => $qty){
			}
		}else{
			$this->redirect($this->referer());
		}
	}
	public function confirm(){
		if(!isset($this->cart) || empty($this->cart)){
			$this->redirect('/search');
		}
		//$this->Cart->checkCredit();
		$this->set('cart', $this->cart);
		$this->set('user', $this->user);
	}
	public function placeorder(){
            if($this->user['TM'][0] == 'CREDIT CARD'){
                $epayId = $this->Cart->findCustomer($this->user['BS'][0]);

                if(!$epayId){
                    $this->Session->setFlash(__("Your credit card is not on file.  Please contact your salesman."), 'default', array('class' => 'failure'));
                    $this->redirect('/cart/confirm');
                    return;
                }

                $creditAvail = $this->Cart->checkCredit($epayId, $this->cart['total']);

                if(!$creditAvail){
                    $this->Session->setFlash(__("Your credit account has exceeded its credit limit.  Please contact your salesman."), 'default', array('class' => 'failure'));
                    $this->redirect('/cart/confirm');
                    return;
                }
            }
		if(is_null($this->cart)){$this->redirect('/cart/confirm');return;}
		$this->cart['which_cc'] = !empty($this->request->data['which_cc']) ? $this->request->data['which_cc'] : '';
		//
		//Is this a CC Customer? if so, need to get payment info
		//
		//UNCOMMENT THE NEXT LINE TO PROCESS ORDERS
                $new_order = $this->Cart->placeOrder();
		if(!empty($new_order->status) && $new_order->status == 'FAIL'){
			$this->Session->setFlash(__("Order failed.  $new_order->reason.  Please try again."), 'default', array('class' => 'failure'));
			$this->redirect('/cart/confirm');
		}else{
      $ordrec = new $this->Order();
      $ordrec->set('customer', $this->user['BS'][0]);
      $ordrec->save();
			$this->set('order', $new_order);
			$this->set('cart', $this->cart);
			$this->set('receipt', $this->cart);
			$this->set('user', $this->user);
			$this->Session->setFlash(__("Your order has been placed<br />Thank you for your business."), 'default', array('class' => 'success'));
			//EMAIL RECEIPT
			if (is_object($new_order)):
			$message = "<div class='main'>
			<p style='";
			$message .= 'font-family: "Arial Black", Arial, Helvetica, sans-serif; font-size: 14px; color: #000000;';$message .= "'>P&E Distributors, Inc.<br>709 Rivergate Pkwy. Goodlettsville, TN 37072 <br>1-800-251-2034<br></p>    	<div class='text-box'>
    		<div class='titles'><strong>Your order has been placed</strong></div>
    		<div class='titles'>Order #:".$new_order->U1[13]."</div>
			<div class='titles'>P.O. #:".$new_order->PO[0]."</div>
			<div id='cart-total'>
    <p class='titles'>Order Total: $".money_format('%!n', ($this->cart['total'] + $this->cart['Shipping']['charge']))."</p>
	</div>
    		<div class='titles' style='margin-top: 10px'>Ordered Items</div>
    		<table id='receipt-table' width='100%' border='1'>
    		<tbody>
				<tr>
				<td>Qty Ordered</td><td>Line Code</td><td>Part Number</td><td>Description</td><td>Jobber Price</td><td>Your Price</td><td>Extended Price</td>
				</tr>";
				foreach($this->cart['items'] as $key => $part):
						$message .= "<tr>";
						$message .= "<td>".$part['qty']."</td>";
						$message .= "<td>".$part['Line']."</td>";
						$message .= "<td>".$part['PartNumber']."</td>";
						$message .= "<td style='text-align:left'>".$part['Description']."</td>";
						$jobber=" ".$part['Jobber'];
						$message .= "<td>$".money_format('%!n', (double)$jobber)."</td>";
						$message .= "<td>$".money_format('%!n', $part['YourPrice'])."</td>";
						$message .= "<td>$".money_format('%!n', ($part['YourPrice']*$part['qty']))."</td>";
						$message .= "</tr>";
				endforeach;
		$message .= "	</tbody>
			</table>
    	</div>
	</div>
	 <div class='text-box' style='clear: none; width: 350px;'>
    	<br>Bill To:<br>
    	Address: ".$this->user['A1'][0]."<br>";
    	if(!empty($this->user['A2'][0])):
    	$message .= "Suite, Unit, or Apt#: ".$this->user['A2'][0]."<br>";
    	endif;
		$message .= $this->user['A3'][0].", ".$this->user['A3'][1]." ".$this->user['A3'][2];
		$message .= "<br><br>";
    $message .= "</div>
	 <div class='text-box' style='clear:none; width: 350px;'>
    	Ship To:<br>";
    	if(!empty($this->cart['Shipping']['careof'])):
    	$message .= "<br>c/o: ".$this->cart['Shipping']['careof']."<br>";
    	endif;
    	$message .= "Address: ".$this->cart['Shipping']['address1']."<br>";
    	if(!empty($this->cart['Shipping']['address2'])):
    	$message .= "Suite, Unit, or Apt.#: ".$this->cart['Shipping']['address2']."<br>";
    	endif;
		$message .= $this->cart['Shipping']['city'].", ".$this->cart['Shipping']['state']." ".$this->cart['Shipping']['zip'];
		$message .= "</div>";
				$email = new CakeEmail('smtp');
				$email->emailFormat('html');
				$email->from(array('online@pedistributors.com' => 'P&E Distributors'));
				$email->to('online@pedistributors.com');
				$email->subject('Order '. $new_order->U1[13].' received for processing.');
				$email->send($message);
				endif;
			$this->set('cart', false);
			$this->Session->delete('cart');
			$this->autoRender = false;
			$this->render('receipt');
		}
	}
	public function shipping(){
		//MJ added 10-1 to correct for history back button
		if(empty($this->cart['items'])){
			//$this->Session->setFlash(__("Your order has already been placed."), 'default', array('class' => 'failure'));
			$this->redirect('/search');
		}
		if(!empty($this->request->data)){
			if($this->request->data['ship_to'] == 'true'){
				if(empty($this->request->data['ship_to_num'])){
					$ship_to_address = $this->Cart->shipToAddress($this->request->data);
					if(!$ship_to_address){
						$this->Session->setFlash(__("You must enter a shipping location number or enter a valid shipping address."), 'default', array('class' => 'failure'));
					}else{
//$this->cart['Shipping']['charge'] = $this->Cart->getShipping($this->cart['total']);
$this->cart['po_number'] = !empty($this->request->data['po_number']) ? $this->request->data['po_number'] : 'WEB';
$this->cart['notes'] = !empty($this->request->data['notes']) ? $this->request->data['notes'] : '';
						$this->cart['Shipping']['charge'] = 0;
						$this->Session->write('cart', $this->cart);
						$this->redirect('/cart/confirm');
					}
				}else{
					//QUERY SHIP TO LOCATION
					//$this->cart['Shipping']['charge'] = $this->Cart->getShipping($this->cart['total']);y
					$this->cart['Shipping']['charge'] = 0;
					$data ['login'] = $this->user['BS'][0];
					$data ['password'] = $this->user['BS'][1];
					$data ['ship_to'] = $this->request->data['ship_to_num'];
					$ship_to = $this->Cart->getShipTo($data);
					if(!$ship_to){
						$this->Session->setFlash(__("No valid shipping location found ."), 'default', array('class' => 'failure'));
					}else{
$this->cart['po_number'] = !empty($this->request->data['po_number']) ? $this->request->data['po_number'] : 'WEB';
$this->cart['notes'] = !empty($this->request->data['notes']) ? $this->request->data['notes'] : '';
			$this->Session->write('cart', $this->cart);
			$this->redirect('/cart/confirm');
			//Ship to address found, go to confirm
					}
				}
			}else{
				//$this->cart['Shipping']['charge'] = $this->Cart->getShipping($this->cart['total']);
				$this->cart['Shipping']['charge'] = 0;
				//Use billing address as shipping address
				$this->Cart->shipToAddress();
			//$this->cart['Shipping']['charge'] = $this->Cart->getShipping($this->cart['total']);
			$this->cart['Shipping']['charge'] = 0;
$this->cart['po_number'] = !empty($this->request->data['po_number']) ? $this->request->data['po_number'] : 'WEB';
$this->cart['notes'] = !empty($this->request->data['notes']) ? $this->request->data['notes'] : '';
			$this->Session->write('cart', $this->cart);
			$this->set('cart', $this->cart);
			$this->redirect('/cart/confirm');
			}
		}
	}
}
