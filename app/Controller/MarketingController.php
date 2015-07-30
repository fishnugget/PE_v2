<?php
App::uses('AppController', 'Controller');
/**
 * Marketing Controller
 *
 * @property Marketing $Marketing
 */
class MarketingController extends AppController {
/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Marketing';

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
		
		//$this->set('marketing', $this->Marketing->find('all'));
		$this->set('marketing', $this->Marketing->find('all',array('conditions' => array('userid =' => $user['BS'][0]))));
		//$this->set('marketing', $marketing);
	}
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Marketing->id = $id;
		if (!$this->Marketing->exists()) {
			throw new NotFoundException(__('Invalid rebate'));
		}
		$this->set('rebate', $this->Marketing->read(null, $id));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		//debug($this->Marketing->find('all'));
		$this->set('marketing', $this->Marketing->find('all'));
		//$this->Marketing->recursive = 0;
		//$this->set('marketing', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Marketing->id = $id;
		if (!$this->Marketing->exists()) {
			throw new NotFoundException(__('Invalid rebate'));
		}
		$this->set('rebate', $this->Marketing->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Marketing->create();
			if ($this->Marketing->save($this->request->data)) {
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
		$this->Marketing->id = $id;
		if (!$this->Marketing->exists()) {
			throw new NotFoundException(__('Invalid rebate'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Marketing->save($this->request->data)) {
				$this->Session->setFlash(__('The rebate has been saved'));
				$this->redirect(array('action' => '/'));
			} else {
				$this->Session->setFlash(__('The rebate could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Marketing->read(null, $id);
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
		$this->Marketing->id = $id;
		if (!$this->Marketing->exists()) {
			throw new NotFoundException(__('Invalid rebate'));
		}
		if ($this->Marketing->delete()) {
			$this->Session->setFlash(__('Marketing deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Marketing was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
