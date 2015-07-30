<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Credits Controller
 *
 * @property Credit $Credit
 */
class EmploymentController extends AppController { 

	public $uses = array();

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add');
		$this->Auth->allow('index');
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
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
			$this->Employment->create();
			if ($this->Employment->save($this->request->data)) {
				
				$this->Session->setFlash(__('The position has been added'));
				//
				$this->request->data['Employment']['data'] = json_encode($this->request->data['Employment']);
			} else {
				$this->Session->setFlash(__('The Online Employment Application could not be saved. Please, try again.'));
			}
			$this->redirect($this->referer());
		}

	}
	
	public function add(){
		if(!empty($this->request->data)){
			if (is_uploaded_file($this->request->data['Employment']['resume']['tmp_name']))
{move_uploaded_file($this->request->data['Employment']['resume']['tmp_name'],'img/rebates/' . $this->request->data['Employment']['resume']['name']);
    // store the filename in the array to be saved to the db
}
			$this->Employment->create();
			if ($this->Employment->save($this->request->data)) {
				
				$this->Session->setFlash(__('Your application has been submitted. Thank you.'));
				//
				$this->request->data['Employment']['data'] = json_encode($this->request->data['Employment']);
			
				// Send the awesome super tits fucking fantastic ass email.
				$message = 'P&E Online Employment Application Submission. <br /><br />';
				foreach ($this->request->data['Employment'] as $k => $data) {
					if (!empty($data)) {
						if ($k != 'data') {
							$k = ucwords(str_replace('_', ' ', $k));
							$message .= "<strong>" . $k . "</strong>: " . $data . "<br />";
						}
					}
				}
				
				$email = new CakeEmail('smtp');
				$email->emailFormat('html');
				//$email->filePaths  = array('img/rebates/');
				if(!empty($this->request->data['Employment']['resume']['name'])){
       			$email->attachments(array('img/rebates/'.$this->request->data['Employment']['resume']['name']));
				}
				$email->from(array('mjackman@pedistributors.com' => 'P&E Distributors'));
				$email->to('bclark@pedistributors.com');
				$email->subject('Online Employment Submission.');
				$email->send($message);
				$this->redirect(array('action' => 'index'));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Online Employment Application could not be saved. Please, try again.'));
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
