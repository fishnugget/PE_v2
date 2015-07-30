<?php
class CartComponent extends Component {
	var $controller;
	function initialize(&$controller) {
		$this->controller =& $controller;
		$this->cart = $this->controller->Session->read('cart');
	}
	function add($new_part, $qty, $update){
		if(empty($this->cart['messages'])){
			$this->cart['messages'] = array();
		}
		if($new_part['QtyAvailable'] <= 0){
			$this->controller->Session->setFlash(__("$new_part[FullPart] is currently out of stock. <br>Please call your salesman to order."), 'default', array('class' => 'failure'));
			$this->cart['messages'][] = "$new_part[FullPart] is currently out of stock. <br>Please call your salesman to order.";
			return $this->cart;
		}
		if(!empty($this->cart['items'])){
			foreach($this->cart['items'] as $key => $part){
				if($part['FullPart'] == $new_part['FullPart']){
					if($qty <= 0){
						if($update){
							unset($this->cart['items'][$key]);
							$this->controller->Session->setFlash(__($part['FullPart']." has been removed from your cart."), 'default', array('class' => 'success'));
						}
					}else{
						if(!$update){
							$qty = $part['qty'];
						}
						if($qty > $part['QtyAvailable']){
							$new_part['qty'] = $part['QtyAvailable'];
							$this->controller->Session->setFlash(__("Insufficient quantity on hand for part #$part[FullPart]<br/>Maximum available has been added to your cart."), 'default', array('class' => 'failure'));
							$this->cart['items'][$key] = $new_part;
						}else{
							$new_part['qty'] = $qty;
							$this->cart['items'][$key] = $new_part;
							$this->controller->Session->setFlash(__("$new_part[FullPart] (QTY:$new_part[qty]) has been added to your cart."), 'default', array('class' => 'success'));
							if($update){
								if(empty($parts_added)){
									$parts_added = array();
									$parts_added[] = "$part[FullPart] (x$qty)";
								}else{
									$parts_added[] = "$part[FullPart] (x$qty)";
								}
							}else{
								if(empty($parts_added)){
									$parts_added = array();
									$parts_added[] = "$part[FullPart] (x$qty)";
								}else{
									$parts_added[] = "$part[FullPart] (x$qty)";
								}
							}
						}
					}
					$this->cart['total'] = $this->calcTotal();
					if(empty($this->cart['items'])){
						$this->cart = false;
					}
					//MJ added 10-1 to prevent orders that would exceed available credit.
			if($this->cart['total']>($this->controller->user['CR'][0]-$this->controller->user['BA'][0])){
			$this->controller->Session->setFlash(__("Cart total $".$this->cart['total']." exceeds your available credit of $".($this->controller->user['CR'][0]-$this->controller->user['BA'][0])."<br>Please contact your salesman."/*, ".ucwords(strtolower($this->controller->salesman[0]['Salesman']['name']))." at: ".$this->controller->salesman[0]['Salesman']['ext']*/), 'default', array('class' => 'failure'));
			}else{
					$this->controller->cart = $this->cart;
					$this->controller->Session->write('cart', $this->cart);
					if(!empty($parts_added) && !$update){
						$this->controller->Session->setFlash(__("The following parts (".implode(',', $parts_added).") have been updated in your cart."), 'default', array('class' => 'success'));
					}
					}
					return $this->cart;
				}
			}
		}
		//No matching parts found in cart.  Add new item.
		if($qty > 0){
			if(empty($this->cart)){
				$this->cart['items'] = array();
			}
			if($new_part['QtyAvailable'] <= 0){
				$this->controller->Session->setFlash(__("$part[FullPart] is currently out of stock. <br>Please call your salesman to order."), 'default', array('class' => 'failure'));
				$this->cart['message'] = "$part[FullPart] is currently out of stock. <br>Please call your salesman to order.";
				return $this->cart;
			}else if($qty > $new_part['QtyAvailable']){
				$new_part['qty'] = $new_part['QtyAvailable'];
				$this->controller->Session->setFlash(__("Qty exceeded for $new_part[FullPart].  Max number available ($new_part[qty]) has been added to your cart."), 'default', array('class' => 'failure'));
			}else{
				$new_part['qty'] = $qty;
			}
			$this->cart['items'][] = $new_part;
			$this->cart['total'] = $this->calcTotal();
			//MJ added 10-1 to prevent orders that would exceed available credit.
			if($this->cart['total']>($this->controller->user['CR'][0]-$this->controller->user['BA'][0])){
			$this->controller->Session->setFlash(__("Cart total $".$this->cart['total']." exceeds your available credit of $".($this->controller->user['CR'][0]-$this->controller->user['BA'][0])."<br>Please contact your salesman."), 'default', array('class' => 'failure'));
			}else{
			$this->controller->cart = $this->cart;
			$this->controller->Session->write('cart', $this->cart);
			//MJ remove 2-26-14 overwriting qty unavailable $this->controller->Session->setFlash(__("$new_part[FullPart] (QTY:$qty) has been added to your cart."), 'default', array('class' => 'success'));
			}
			//$this->controller->Session->setFlash(__("$new_part[FullPart] (x$qty) has been added to your cart."), 'default', array('class' => 'success'));
			//$this->cart['messages'][] = "$new_part[FullPart] (x$qty) has been added to your cart.";
		}
		return $this->cart;
	}
	function calcTotal(){
		$total = 0;
		foreach($this->cart['items'] as $key => $part){
			if(empty($part['YourPrice'])){
				$price = $part['Jobber'];
			}else{
				$price = $part['YourPrice'];
			}
			$total += $part['qty'] * $price;
		}
		return money_format('%!n', $total);
	}
        public function findCustomer( $customerId ){
            $wsdl='https://www.usaepay.com/soap/gate/3213EA2A/usaepay.wsdl';

            // instantiate SoapClient object as $client
            $client = new SoapClient($wsdl);

            $sourcekey = 'YuFvOqWk7DP0fHo2sYKUDY16q0oyV0Gt';
            $pin = '5989';

            // generate random seed value
            $seed=mktime() . rand();

            // make hash value using sha1 function
            $clear= $sourcekey . $seed . $pin;
            $hash=sha1($clear);

            // assembly ueSecurityToken as an array
            $token=array(
            'SourceKey'=>$sourcekey,
            'PinHash'=>array(
            'Type'=>'sha1',
            'Seed'=>$seed,
            'HashValue'=>$hash
            ),
            'ClientIP'=>$_SERVER['REMOTE_ADDR'],
            );

            try {

            $search=array(
            array(
            'Field'=>'CustomerID',
            'Type'=>'eq',
            'Value'=>$customerId)
            );

            $start=0;
            $limit=10;
            $matchall=true;
            $RefNum=1009411;

            $res=$client->searchCustomers($token,$search,$matchall,$start,$limit);

            if( !empty($res->Customers) ){
            return $res->Customers[0]->CustNum;
            }else{
            $this->Session->setFlash(__("No card on file.  Please contact your salesman."), 'default', array('class' => 'failure'));
            return false;
            }

            $this->assertTrue($res->CustomersMatched>0 && $res->CustomersReturned>0);

            }

            catch (SoapFault $e) {
            $this->Session->setFlash(__("No card on file.  Please contact your salesman."), 'default', array('class' => 'failure'));
            return false;
            }
        }
        function checkCredit( $custNumber, $amount ){
            //for live server use 'www' for test server use 'sandbox'
            $wsdl='https://www.usaepay.com/soap/gate/3213EA2A/usaepay.wsdl';

            // instantiate SoapClient object as $client
            $client = new SoapClient($wsdl);

            $sourcekey = 'YuFvOqWk7DP0fHo2sYKUDY16q0oyV0Gt';
            $pin = '5989';

            // generate random seed value
            $seed=mktime() . rand();

            // make hash value using sha1 function
            $clear= $sourcekey . $seed . $pin;
            $hash=sha1($clear);

            // assembly ueSecurityToken as an array
            $token=array(
            'SourceKey'=>$sourcekey,
            'PinHash'=>array(
            'Type'=>'sha1',
            'Seed'=>$seed,
            'HashValue'=>$hash
            ),
            'ClientIP'=>$_SERVER['REMOTE_ADDR'],
            );

            try {

            $Details=array(
            'Invoice' => rand(),
            'PONum' => '',
            'OrderID' => '',
            'Description' => 'Sample Credit Card Sale',
            'Amount'=> $amount
            );

            $CustNum='28517843';
            $PayMethod='0';
            $Command='AuthOnly';

            $res=$client->runCustomerTransaction($token, $CustNum, $Details, $Command, $PayMethod);

            if( $res->Result == 'Approved' ){
                return true;
            }else{
                return false;
            }

            }

            catch (SoapFault $e) {
            $this->Session->setFlash(__("Your credit account has exceeded its credit limit.  Please contact your salesman."), 'default', array('class' => 'failure'));

            }
        }
//	function checkCredit(){
//            debug($this->controller->user);
//            die('check credit');
//		if(strtoupper($this->controller->user['TM'][0]) == 'CREDIT CARD'){
//			if(($this->controller->cart['which_cc']) == 'onfile'){
//				$this->controller->redirect('/cart/recharge');
//			}else{
//			$this->controller->redirect('/cart/charge');
//			}
//		}
//	}
	function deleteMessages(){
		$this->controller->cart['messages'] = array();
		$this->controller->Session->write('cart', $this->controller->cart);
	}
	function getShipping($amount){
		if($amount < 25){
			return 4.95;
		}else if($amount < 100){
			return 9.95;
		}else if($amount < 250){
			return 11.95;
		}else{
			return 12.95;
		}
	}
	function placeOrder(){
		/*if($_SERVER['REMOTE_ADDR'] != "64.16.163.165"){
	//$data['TEST']=1;
	//exit;
}*/
		$data['login'] = $this->controller->user['BS'][0];
		$data['password'] = $this->controller->user['BS'][1];
		$data['total'] = $this->cart['total'];
		$data['po_number'] = !empty($this->cart['po_number']) ? $this->cart['po_number'] : 'WEB';
		$data['notes'][] = !empty($this->cart['notes']) ? $this->cart['notes'] : '';//.'\n\r Payment processed for '.$this->cart['total'];
		$data['notes']=json_encode($data['notes']);
		//MJ added 9-3 if/else for ship_to_num
		if(!empty($this->cart['Shipping']['ship_to'])){
			$data['ship_to']=$this->cart['Shipping']['ship_to'];
		}else{
		$data['careof'] = !empty($this->cart['Shipping']['careof']) ? $this->cart['Shipping']['careof'] : '';
		$data['address1'] = $this->cart['Shipping']['address1'];
		$data['address2'] = $this->cart['Shipping']['address2'];
		$data['city'] = $this->cart['Shipping']['city'];
		$data['state'] = $this->cart['Shipping']['state'];
		$data['zip'] = $this->cart['Shipping']['zip'];}
		foreach($this->cart['items'] as $key => $item){
			$data['parts'][] = array($item['FullPart'], $item['qty']);
		}
		$data['parts'] = json_encode($data['parts']);
		//debug($data);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_URL, 'http://api.pedistributors.com/order/place');
	    curl_setopt($ch, CURLOPT_POST, count($data));
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	    $results = curl_exec($ch);
		//debug($results); //show any api errors
	    $results = json_decode($results);
	    return $results;
	}
	function shipToAddress($data = NULL){
		if(!$data){
			$this->controller->cart['Shipping'] = array();
    		$this->controller->cart['Shipping']['address1'] = $this->controller->user['A1'][0];
    		$this->controller->cart['Shipping']['address2'] = $this->controller->user['A2'][0];
    		$this->controller->cart['Shipping']['city'] = $this->controller->user['A3'][0];
    		$this->controller->cart['Shipping']['state'] = $this->controller->user['A3'][1];
    		$this->controller->cart['Shipping']['zip'] = $this->controller->user['A3'][2];
    		$this->controller->cart['Billing'] = $this->controller->cart['Shipping'];
    		return $this->controller->cart;
		}
		if(empty($data['ship_to_address'])){
			return false;
		}else{
			$this->controller->cart['Shipping']['address1'] = $data['ship_to_address'];
		}
		if(empty($data['ship_to_city'])){
			return false;
		}else{
			$this->controller->cart['Shipping']['city'] = $data['ship_to_city'];
		}
		if(empty($data['ship_to_state'])){
			return false;
		}else{
			$this->controller->cart['Shipping']['state'] = $data['ship_to_state'];
		}
		if(empty($data['ship_to_zip'])){
			return false;
		}else{
			$this->controller->cart['Shipping']['zip'] = $data['ship_to_zip'];
		}
		if(!empty($data['ship_to_address2'])){
			$this->controller->cart['Shipping']['address2'] = $data['ship_to_address2'];
		}
		if(!empty($data['ship_to_careof'])){
			$this->controller->cart['Shipping']['careof'] = $data['ship_to_careof'];
		}
		return true;
	}
	function getShipTo($data){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_URL, 'http://api.pedistributors.com/order/address');
	    curl_setopt($ch, CURLOPT_POST, count($data));
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	    $results = (array)json_decode(curl_exec($ch));
	    if(!empty($results['A1'])){
    		$this->controller->cart['Shipping'] = array();
			$this->controller->cart['Shipping']['ship_to']  = $data['ship_to'];#MJ added 9-3
    		$this->controller->cart['Shipping']['address1'] = $results['A1'][0];
    		$this->controller->cart['Shipping']['address2'] = $results['A2'][0];
    		$this->controller->cart['Shipping']['city'] = $results['A3'][0];
    		$this->controller->cart['Shipping']['state'] = $results['A3'][1];
    		$this->controller->cart['Shipping']['zip'] = $results['A3'][2];
    		$this->controller->Session->write('cart', $this->controller->cart);
    		return true;
	    }else{
		    return false;
	    }
	}
}
