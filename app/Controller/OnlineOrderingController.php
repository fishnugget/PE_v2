<?php
App::uses('AppController', 'Controller');
/**
 * OnlineOrderings Controller
 *
 * @property OnlineOrdering $OnlineOrdering
 */
class OnlineOrderingController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OnlineOrdering->recursive = 0;
		$this->set('onlineOrderings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->OnlineOrdering->id = $id;
		if (!$this->OnlineOrdering->exists()) {
			throw new NotFoundException(__('Invalid online ordering'));
		}
		$this->set('onlineOrdering', $this->OnlineOrdering->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OnlineOrdering->create();
			if ($this->OnlineOrdering->save($this->request->data)) {
				$this->Session->setFlash(__('The online ordering has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Online Ordering Request could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->OnlineOrdering->id = $id;
		if (!$this->OnlineOrdering->exists()) {
			throw new NotFoundException(__('Invalid online ordering'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OnlineOrdering->save($this->request->data)) {
				$this->Session->setFlash(__('The online ordering has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Online Ordering Request could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OnlineOrdering->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->OnlineOrdering->id = $id;
		if (!$this->OnlineOrdering->exists()) {
			throw new NotFoundException(__('Invalid online ordering'));
		}
		if ($this->OnlineOrdering->delete()) {
			$this->Session->setFlash(__('Online ordering deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Online ordering was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->OnlineOrdering->recursive = 0;
		$this->set('onlineOrderings', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->OnlineOrdering->id = $id;
		if (!$this->OnlineOrdering->exists()) {
			throw new NotFoundException(__('Invalid online ordering'));
		}
		$this->set('onlineOrdering', $this->OnlineOrdering->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->OnlineOrdering->create();
			if ($this->OnlineOrdering->save($this->request->data)) {
				$this->Session->setFlash(__('The online ordering has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The online ordering could not be saved. Please, try again.'));
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
		$this->OnlineOrdering->id = $id;
		if (!$this->OnlineOrdering->exists()) {
			throw new NotFoundException(__('Invalid online ordering'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OnlineOrdering->save($this->request->data)) {
				$this->Session->setFlash(__('The online ordering has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The online ordering could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OnlineOrdering->read(null, $id);
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
		$this->OnlineOrdering->id = $id;
		if (!$this->OnlineOrdering->exists()) {
			throw new NotFoundException(__('Invalid online ordering'));
		}
		if ($this->OnlineOrdering->delete()) {
			$this->Session->setFlash(__('Online ordering deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Online ordering was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
