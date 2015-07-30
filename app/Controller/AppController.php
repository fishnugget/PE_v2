<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	//MJ Installed 3/26/14, not yet working public $theme = "Cakestrap";
	public $components = array(
		'Session',
	    'Auth' => array(
	        'loginAction' => array(
	            'controller' => 'users',
	            'action' => 'login'
	        ),
	        'authError' => 'Did you really think you are allowed to see that?'
	    )
	);
	var $uses = array();
	public function beforeFilter() {
		if(!empty($this->params->query['debug']) && $this->params->query['debug'] == 'on'){
			$this->Set('debug', true);
			$this->Session->write('debug', true);
		}else if(!empty($this->params->query['debug']) && $this->params->query['debug'] == 'off'){
			$this->Set('debug', false);
			$this->Session->write('debug', false);
		}
		$this->set('title_for_layout', 'P&E Distributors');
		$this->Auth->authenticate = array(
		    'Api', // app authentication object.
		);
		if($this->Auth->user()){
			$this->user = $this->Auth->user();
			$this->Set('user', $this->Auth->user());
			$this->user['SM'] = explode("T ", $this->user['SM'][0]);
		if(isset($this->user['SM'][1])){
		$this->loadModel("Salesman");
		$this->set('salesman', $this->Salesman->find('all', array('conditions' => array('name' => $this->user['SM'][1]))));
		}
		if(strtoupper($this->user['TM'][0]) == 'CREDIT CARD'){
			$this->loadModel("CConfile");
			$cc=$this->CConfile->find('first', array('conditions' => array('custnum' => $this->user['A6'][0])));
			$this->Set('CC', $cc['CConfile']);
			$this->Session->write('CC', $cc['CConfile']);
			}
		}
		$cart = $this->Session->read('cart');
		if(!empty($cart)){
			$this->Set('cart', $cart);
		}else{
			$this->Set('cart', false);
		}
	}
}