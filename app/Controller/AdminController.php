<?php
App::uses('AppController', 'Controller');
/**
 * Elements Controller
 *
 * @property Elements $Elements
 */
class AdminController extends AppController {
	/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Admin';
	/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();


	public function beforeFilter(){
		parent::beforeFilter();
		//$this->Auth->allow('*');
	}

}
?>