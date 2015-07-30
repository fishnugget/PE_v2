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
class TermsController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Terms';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	public $components = array();
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->cart = $this->Session->read('cart');
		if(!empty($this->cart['messages'])){
			foreach($this->cart['messages'] as $key=>$msg){
				$this->Session->setFlash(__($msg), 'default', array('class' => 'failure'));
			}
			$this->Cart->deleteMessages();
		}
		$this->set('user', $this->user);
		
		//AUTH Setting
		$this->Auth->allow('*');
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
	
	public function index(){}
	
	public function register(){
		if(!empty($this->request->data)){
			debug($this->request->data);
			die('This is what POSTed data looks like');	
		}
	}
	
}
