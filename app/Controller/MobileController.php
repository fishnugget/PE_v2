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

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class MobileController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Mobile';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	public $components = array('Search');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
		public function beforeFilter(){
		parent::beforeFilter();
		//$this->Auth->allow('*');
	}
	public function index(){
		$this->layout = 'mobile';
		$results = false;
		$full_part = false;
		if(!empty($this->request->data)){
			if(!empty($this->request->data['partnumber'])){
				$data = array();
				if(!empty($this->request->data['linecode'])){
					$data['partnumber'] = $this->request->data['linecode'].$this->request->data['partnumber'];
					$full_part = true;
				}else{
					$data['partnumber'] = $this->request->data['partnumber'];
				}
				$data['login'] = $this->user['BS'][0];
				$results = $this->Mobile->search($data);
			    if($results && $results->DR[0][0] !== ''){
			    	if($full_part){
			    		$results->DR[0][1] = substr($results->DR[0][0],0,3);
			    	}
			    	$this->Session->write('search', $results);
				    $this->set('results', $results);
			    }else{
			    	$this->Session->write('search', false);
				    $this->Session->setFlash(__("Your search for part# ".$data['partnumber']." returned no results.<br> Please check part# and retry."), 'default', array('class' => 'failure'));
			    }
				
			}else{
				$this->Session->setFlash(__("Please enter a part# to search"), 'default', array('class' => 'failure'));
			}
			
		}
		$last_search = $this->Session->read('search');
		if($last_search){
			$this->set('results', $last_search);
		}
		
	}
	
	public function ymm($iframe = false){
	$this->layout = 'ymm';
	if($iframe){
		exit();
	}
	}
}
