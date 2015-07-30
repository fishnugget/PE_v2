<?php
class SearchComponent extends Component {
	var $controller;

	function initialize(&$controller) {
		$this->controller =& $controller;
	}
	
	function search($data){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_URL, 'http://api.pedistributors.com/parts/search');
	    curl_setopt($ch, CURLOPT_POST, 2);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	    $results = curl_exec($ch);
	    return json_decode($results);
	}

}