<?php
App::uses('AppController', 'Controller');
/**
 * Linecards Controller
 *
 * @property Linecard $Linecard
 */
class LinecardController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Linecard';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();


	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('*');
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->set('linecards', $this->Linecard->find('all'));
	}
	
	public function all() {
		$letters = range('a', 'z');
		$this->set('letters', $letters);
		$this->Linecard->recursive = 0;
		//debug($this->Linecard->find('all'));
		if (!isset($_GET['type'])){
			$this->set('type', '');
		$this->set('linecards', $this->Linecard->find('all'));}else{
		$this->set('type', $_GET['type']);
		$linecards = $this->Linecard->find('all',array('conditions' => array('type LIKE' => '%'.$_GET['type'].'%')));
		$this->set('linecards', $linecards);}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Linecard->id = $id;
		if (!$this->Linecard->exists()) {
			throw new NotFoundException(__('Invalid linecard'));
		}
		$this->set('linecard', $this->Linecard->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Linecard->create();
			if ($this->Linecard->save($this->request->data)) {
				$this->Session->setFlash(__('The linecard has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The linecard could not be saved. Please, try again.'));
			}
		}
	}
	
/**
 * convert method
 *
 * @return void
 */
	public function convert($linecode) {
		$options['conditions'] = array(
			'dci_line' => $linecode
		);
		$new_code = $this->Linecard->find('first', $options);
		if($new_code){
			echo $new_code['Linecard']['line'];
		}else{
			echo 'false';
		}
		exit();
	}
	
	
/**
 * convert method
 *
 * @return void
 */
	public function aaiaconvert($linecode) {
		$options['conditions'] = array(
			'line' => $linecode
		);
		$new_code = $this->Linecard->find('first', $options);
		if($new_code){
			echo $new_code['Linecard']['dci_line'];
		}else{
			echo 'false';
		}
		exit();
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Linecard->id = $id;
		if (!$this->Linecard->exists()) {
			throw new NotFoundException(__('Invalid linecard'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Linecard->save($this->request->data)) {
				$this->Session->setFlash(__('The linecard has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The linecard could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Linecard->read(null, $id);
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
		$this->Linecard->id = $id;
		if (!$this->Linecard->exists()) {
			throw new NotFoundException(__('Invalid linecard'));
		}
		if ($this->Linecard->delete()) {
			$this->Session->setFlash(__('Linecard deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Linecard was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$letters = range('a', 'z');
		$this->set('letters', $letters);
		$this->Linecard->recursive = 0;
		//debug($this->Linecard->find('all'));
		$this->set('linecards', $this->Linecard->find('all'));
		//$this->Linecard->recursive = 0;
		//$this->set('linecards', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Linecard->id = $id;
		if (!$this->Linecard->exists()) {
			throw new NotFoundException(__('Invalid linecard'));
		}
		$this->set('linecard', $this->Linecard->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Linecard->create();
			if ($this->Linecard->save($this->request->data)) {
				$this->Session->setFlash(__('The linecard has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The linecard could not be saved. Please, try again.'));
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
		$this->Linecard->id = $id;
		if (!$this->Linecard->exists()) {
			throw new NotFoundException(__('Invalid linecard'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Linecard->save($this->request->data)) {
				$this->Session->setFlash(__('The linecard has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The linecard could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Linecard->read(null, $id);
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
		$this->Linecard->id = $id;
		if (!$this->Linecard->exists()) {
			throw new NotFoundException(__('Invalid linecard'));
		}
		if ($this->Linecard->delete()) {
			$this->Session->setFlash(__('Linecard deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Linecard was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function find() {
    if ($this->RequestHandler->isAjax()) {
        $this->autoLayout = false;
        $this->autoRender = false;
        $this->Linecard->recursive = -1;
        $results = $this->Linecard->find('all', array('fields' => array('id', 'line'), 'conditions' => array('line LIKE "%'.$_GET['term'].'%"')));
        $response = array();
        $i = 0;
        foreach($results as $result){
            $response[$i]['value'] = $result['Linecard']['line'];
            $response[$i]['id'] = $result['Linecard']['id'];
            $i++;
        }
        echo json_encode($response);
    }
}
}
