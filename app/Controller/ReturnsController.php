<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Credits Controller
 *
 * @property Credit $Credit
 */
class ReturnsController extends AppController { 
//var $uses = array('Returns'); 
	public $uses = array('Returns');
	public function beforeFilter(){
		parent::beforeFilter();
		//$this->Auth->allow('add');
		//$this->Auth->allow('index');
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		//debug($this->request->data['Returns']['data']);
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function admin_index() {
	}
	public function admin_add() {
		if(!empty($this->request->data)){
			$this->Returns->create();
			if ($this->Returns->save($this->request->data)) {
				
				$this->Session->setFlash(__('The position has been added'));
				//
				$this->request->data['Returns']['data'] = ($this->request->data['Returns']);
			} else {
				$this->Session->setFlash(__('The Online Employment Application could not be saved. Please, try again.'));
			}
			$this->redirect($this->referer());
		}
	}
	
	public function add(){
		if(!empty($this->request->data)){
			//debug($this->request->data);
			$this->Returns->create();
			if ($this->Returns->save($this->request->data)) {
				
				$this->Session->setFlash(__('Your RGA request has been submitted. Thank you.'), 'default', array('class' => 'success'));
				$returns = $this->request->data['Returns'];
				$message = 'P&E Online RGA Request. <br /><br />Account#: '.$this->user['A6'][0].'<br />Customer: '.$this->user['BT'][0].'<br /><br />';
				foreach ($returns as $return) {
					foreach ($return as $k => $data) {
					if (!empty($data)) {
			
						if ($k != 'data') {
							$k = ucwords(str_replace('_', ' ', $k));
							$message .= "<strong>" . $k . "</strong>: " . $data . "<br />";
						}
					  }
					}$message .="<br /><hr>";
				}
				
				$email = new CakeEmail('smtp');
				$email->emailFormat('html');
				/*$email->filePaths  = array('img/rebates/');
				if(!empty($this->request->data['Returns']['resume']['name'])){
				$email->attachments(array('img/rebates/'.$this->request->data['Employment']['resume']['name']));
				}*/
				$email->from(array('online@pedistributors.com' => 'P&E Distributors'));
				$email->to('m.harris@pedistributors.com');
				$email->subject('Online RGA Request.');
				$email->send($message);
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The RGA Request could not be saved. Please, try again.'));
			}
			$this->redirect($this->referer());
		}
	}
/**
 * add method
 *
 * @return void
 */
 
}