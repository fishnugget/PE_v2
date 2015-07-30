<?php
App::uses('AppController', 'Controller');
/**
 * Elements Controller
 *
 * @property Elements $Elements
 */
class ElementsController extends AppController {
	/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Elements';
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
	public function headercart() {

	}
	public function history() {
		echo $this->requestAction(array('controller' => 'orders', 'action' => 'history'));

	}
function tagcloud() {
	$this->loadModel('Linecard');
	if ($this->request->is('requested')) {
            return $this->Linecard->find('all');
        } else {
    $this->set('linecards', $this->Linecard->find('all'));
    }

}
}
?>