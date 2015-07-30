<?php

App::uses('AppController', 'Controller');

class OrdersController extends AppController {

	public $uses = array();
	public $components = array('Order');


	public function beforeFilter(){
		parent::beforeFilter();
		
	}
	public function returns(){
		//$this->history();
		}
	public function detail($order_number){
		//$this->layout = 'blank';
		$order = $this->Order->details($order_number);
		
		if(!empty($order->status) && $order->status == 'FAIL'){
			$this->Session->setFlash(__("Your search returned no results."), 'default', array('class' => 'failure'));
			$this->redirect($this->referer());
		}else{
			$this->set('order', $order);
		}
	}
	
	public function history(){
		//$this->layout = 'blank';
		$history = $this->Order->history();
		//debug($history);
		$paginating_array = array();
		if (!empty($history->history->OPEN)) {
			foreach($history->history->OPEN as &$f){
				$f[6] = 'OPEN';
				$f[7] = substr($f[1], -2).$f[1];
				array_push($paginating_array,$f);
			}
		}
		if (!empty($history->history->SHIPPED)) {
			foreach($history->history->SHIPPED as &$f){
				$f[6] = 'SHIPPED';
				$f[7] = substr($f[1], -2).$f[1];
				array_push($paginating_array,$f);
			}
		}
		
		$page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
		$dir = (!empty($_GET['dir']) && $_GET['dir'] == 'asc') ? 'asc' : 'desc';
			
		if (!empty($_GET['sort']) && $_GET['sort'] == 'order') {
			if ($dir == 'asc') {
				$paginating_array = $this->subval_sort($paginating_array, 0, true);
			} else if ($dir == 'desc') {
				$paginating_array = $this->subval_sort($paginating_array, 0, false);
			}
		} else if (!empty($_GET['sort']) && $_GET['sort'] == 'date') {
			if ($dir == 'asc') {
				$paginating_array = $this->subval_sort($paginating_array, 7, true);
			} else if ($dir == 'desc') {
				$paginating_array = $this->subval_sort($paginating_array, 7, false);
			}
		} else if (!empty($_GET['sort']) && $_GET['sort'] == 'amount') {
			if ($dir == 'asc') {
				$paginating_array = $this->subval_sort($paginating_array, 3, true);
			} else if ($dir == 'desc') {
				$paginating_array = $this->subval_sort($paginating_array, 3, false);
			}
		}else if (!empty($_GET['sort']) && $_GET['sort'] == 'status') {
			if ($dir == 'asc') {
				$paginating_array = $this->subval_sort($paginating_array, 5, true);
			} else if ($dir == 'desc') {
				$paginating_array = $this->subval_sort($paginating_array, 5, false);
			}
		}
		
		$pages = array_chunk($paginating_array, 50);
		
		if(!$history){
			//$this->Session->setFlash(__("Your search returned no results."), 'default', array('class' => 'failure'));
			$this->redirect($this->referer());
		}else{
			$this->set('dir', $dir);
			$this->set('page', (int) $page);
			$this->set('history', $pages);
		}
		
	}
	
	// false == 'desc'
	function subval_sort($a,$subkey,$dir = false) {
		foreach($a as $k=>$v) {
			$b[$k] = strtolower($v[$subkey]);
		}
		
		if ($dir) {
			asort($b);
		} else {
			arsort($b);
		}
		
		foreach($b as $key=>$val) {
			$c[] = $a[$key];
		}
		return $c;
	}

}
