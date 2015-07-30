<?php
class OrderComponent extends Component {
	var $controller;

	function initialize(&$controller) {
		$this->controller =& $controller;
	}
	
	function history(){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_URL, 'http://api.pedistributors.com/order/history/'.$this->controller->user['BS'][0]);
	    $results = curl_exec($ch);
	    return json_decode($results);
	    	
	}
	
	function details($order_number){
		$data['login'] = $this->controller->user['BS'][0];
		$data['order_number'] = $order_number;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_URL, 'http://api.pedistributors.com/order/details');
	    curl_setopt($ch, CURLOPT_POST, 2);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	    $results = curl_exec($ch);
	    return json_decode($results);
	}
}