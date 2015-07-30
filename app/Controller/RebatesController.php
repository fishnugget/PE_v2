<?php
App::uses('AppController', 'Controller');
/**
 * Rebates Controller
 *
 * @property Rebate $Rebate
 */
class RebatesController extends AppController {
/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Rebates';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();


	public function beforeFilter(){
		parent::beforeFilter();
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		//$this->set('rebates', $this->Rebate->find('all'));
		$this->set('rebates', $this->Rebate->find('all',array('conditions' => array('startDate <=' => date("Y-m-d"),'endDate >=' => date("Y-m-d")))));
		//$this->set('rebates', $rebates);
	}
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Rebate->id = $id;
		if (!$this->Rebate->exists()) {
			throw new NotFoundException(__('Invalid rebate'));
		}
		$this->set('rebate', $this->Rebate->read(null, $id));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		//debug($this->Rebate->find('all'));
		$this->set('rebates', $this->Rebate->find('all'));
		//$this->Rebate->recursive = 0;
		//$this->set('rebates', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Rebate->id = $id;
		if (!$this->Rebate->exists()) {
			throw new NotFoundException(__('Invalid rebate'));
		}
		$this->set('rebate', $this->Rebate->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			if (is_uploaded_file($this->request->data['Rebate']['image']['tmp_name']))
{move_uploaded_file($this->request->data['Rebate']['image']['tmp_name'],'img/rebates/' . $this->request->data['Rebate']['image']['name']);
    // store the filename in the array to be saved to the db
    $this->request->data['Rebate']['image'] = $this->request->data['Rebate']['image']['name'];
}
			$this->Rebate->create();
			if ($this->Rebate->save($this->request->data)) {
				$this->Session->setFlash(__('The rebate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rebate could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Rebate->id = $id;
		if (!$this->Rebate->exists()) {
			throw new NotFoundException(__('Invalid rebate'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if (is_uploaded_file($this->request->data['Rebate']['image']['tmp_name']))
{move_uploaded_file($this->request->data['Rebate']['image']['tmp_name'],'img/rebates/' . $this->request->data['Rebate']['image']['name']);
    // store the filename in the array to be saved to the db
    $this->request->data['Rebate']['image'] = $this->request->data['Rebate']['image']['name'];
}
			if ($this->Rebate->save($this->request->data)) {
				$this->Session->setFlash(__('The rebate has been saved'));
				$this->redirect(array('action' => '/'));
			} else {
				$this->Session->setFlash(__('The rebate could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Rebate->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Rebate->id = $id;
		if (!$this->Rebate->exists()) {
			throw new NotFoundException(__('Invalid rebate'));
		}
		if ($this->Rebate->delete()) {
			$this->Session->setFlash(__('Rebate deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rebate was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
