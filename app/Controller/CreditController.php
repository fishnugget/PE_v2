<?php

App::uses('AppController', 'Controller');

App::uses('CakeEmail', 'Network/Email');

/**

 * Credits Controller

 *

 * @property Credit $Credit

 */

class CreditController extends AppController {



	public $uses = array('Ordering', 'Credit');

	

	public function beforeFilter(){

		parent::beforeFilter();

		$this->Auth->allow('add', 'ordering');

	}

/**

 * index method

 *

 * @return void

 */

	public function index() {

		$this->Credit->recursive = 0;

		$this->set('credits', $this->paginate());

	}



/**

 * view method

 *

 * @throws NotFoundException

 * @param string $id

 * @return void

 */

	public function view($id = null) {

		$this->Credit->id = $id;

		if (!$this->Credit->exists()) {

			throw new NotFoundException(__('Invalid credit'));

		}

		$this->set('credit', $this->Credit->read(null, $id));

	}

	

	public function ordering(){

		if(!empty($this->request->data)){

			$this->Ordering->create();

			if ($this->Ordering->save($this->request->data)) {

				

				$this->Session->setFlash(__('The online ordering application has been saved'));

				//

				$this->request->data['Ordering']['data'] = json_encode($this->request->data['Ordering']);

			

				// Send the awesome super tits fucking fantastic ass email.

				$message = 'P&E Customer Online Ordering Registration Submission. <br /><br />';

				foreach ($this->request->data['Ordering'] as $k => $data) {

					if (!empty($data)) {

						if ($k != 'data') {

							$k = ucwords(str_replace('_', ' ', $k));

							$message .= "<strong>" . $k . "</strong>: " . $data . "<br />";

						}

					}

				}

				

				$email = new CakeEmail('smtp');

				$email->emailFormat('html');

				$email->from(array('mjackman@pedistributors.com' => 'P&E Distributors'));

				$email->to('mjackman@pedistributors.com');

				$email->subject('Online Ordering Registration Submission.');

				$email->send($message);

				$this->redirect('/whyPE');

				//$this->redirect(array('action' => 'index'));

			} else {

				$this->Session->setFlash(__('The Online Ordering Application could not be saved. Please, try again.'));

			}

			$this->redirect($this->referer());

		}

	}



/**

 * add method

 *

 * @return void

 */

	public function add() {

		$state_list = array('AL'=>"Alabama",  

			'AK'=>"Alaska",  

			'AZ'=>"Arizona",  

			'AR'=>"Arkansas",  

			'CA'=>"California",  

			'CO'=>"Colorado",  

			'CT'=>"Connecticut",  

			'DE'=>"Delaware",  

			'DC'=>"District Of Columbia",  

			'FL'=>"Florida",  

			'GA'=>"Georgia",  

			'HI'=>"Hawaii",  

			'ID'=>"Idaho",  

			'IL'=>"Illinois",  

			'IN'=>"Indiana",  

			'IA'=>"Iowa",  

			'KS'=>"Kansas",  

			'KY'=>"Kentucky",  

			'LA'=>"Louisiana",  

			'ME'=>"Maine",  

			'MD'=>"Maryland",  

			'MA'=>"Massachusetts",  

			'MI'=>"Michigan",  

			'MN'=>"Minnesota",  

			'MS'=>"Mississippi",  

			'MO'=>"Missouri",  

			'MT'=>"Montana",

			'NE'=>"Nebraska",

			'NV'=>"Nevada",

			'NH'=>"New Hampshire",

			'NJ'=>"New Jersey",

			'NM'=>"New Mexico",

			'NY'=>"New York",

			'NC'=>"North Carolina",

			'ND'=>"North Dakota",

			'OH'=>"Ohio",  

			'OK'=>"Oklahoma",  

			'OR'=>"Oregon",  

			'PA'=>"Pennsylvania",  

			'RI'=>"Rhode Island",  

			'SC'=>"South Carolina",  

			'SD'=>"South Dakota",

			'TN'=>"Tennessee",  

			'TX'=>"Texas",  

			'UT'=>"Utah",  

			'VT'=>"Vermont",  

			'VA'=>"Virginia",  

			'WA'=>"Washington",  

			'WV'=>"West Virginia",  

			'WI'=>"Wisconsin",  

			'WY'=>"Wyoming");

			$this->set('states', $state_list);

		if ($this->request->is('post')) {

			$this->Credit->create();

			if ($this->Credit->save($this->request->data)) {

				

				$this->Session->setFlash(__('The credit application has been saved'));

				$this->request->data['Credit']['data'] = json_encode($this->request->data['Credit']);

			

				// Send the awesome super tits fucking fantastic ass email.

				$message = 'New Credit Registration Submission. <br /><br />';

				foreach ($this->request->data['Credit'] as $k => $data) {

					if (!empty($data)) {

						if ($k != 'data') {

							$k = ucwords(str_replace('_', ' ', $k));

							$message .= "<strong>" . $k . "</strong>: " . $data . "<br />";

						}

					}

				}

				

				$email = new CakeEmail('smtp');

				$email->emailFormat('html');

				$email->from(array('mjackman@pedistributors.com' => 'P&E Distributors'));

				$email->to('mjackman@pedistributors.com');

				$email->subject('New Credit Registration Submission.');

				$email->send($message);

				$this->redirect(array('action' => 'index'));

			} else {

				$this->Session->setFlash(__('The Credit Application could not be saved. Please, try again.'));

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

		$this->Credit->id = $id;

		if (!$this->Credit->exists()) {

			throw new NotFoundException(__('Invalid credit'));

		}

		if ($this->request->is('post') || $this->request->is('put')) {

			if ($this->Credit->save($this->request->data)) {

				$this->Session->setFlash(__('The credit has been saved'));

				$this->redirect(array('action' => 'index'));

			} else {

				$this->Session->setFlash(__('The Credit Application could not be saved. Please, try again.'));

			}

		} else {

			$this->request->data = $this->Credit->read(null, $id);

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

		$this->Credit->id = $id;

		if (!$this->Credit->exists()) {

			throw new NotFoundException(__('Invalid credit'));

		}

		if ($this->Credit->delete()) {

			$this->Session->setFlash(__('Credit deleted'));

			$this->redirect(array('action' => 'index'));

		}

		$this->Session->setFlash(__('Credit was not deleted'));

		$this->redirect(array('action' => 'index'));

	}



/**

 * admin_index method

 *

 * @return void

 */

	public function admin_index() {

		$this->Credit->recursive = 0;

		$this->set('credits', $this->paginate());

	}



/**

 * admin_view method

 *

 * @throws NotFoundException

 * @param string $id

 * @return void

 */

	public function admin_view($id = null) {

		$this->Credit->id = $id;

		if (!$this->Credit->exists()) {

			throw new NotFoundException(__('Invalid credit'));

		}

		$this->set('credit', $this->Credit->read(null, $id));

	}



/**

 * admin_add method

 *

 * @return void

 */

	public function admin_add() {

		if ($this->request->is('post')) {

			$this->Credit->create();

			if ($this->Credit->save($this->request->data)) {

				$this->Session->setFlash(__('The credit has been saved'));

				$this->redirect(array('action' => 'index'));

			} else {

				$this->Session->setFlash(__('The credit could not be saved. Please, try again.'));

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

		$this->Credit->id = $id;

		if (!$this->Credit->exists()) {

			throw new NotFoundException(__('Invalid credit'));

		}

		if ($this->request->is('post') || $this->request->is('put')) {

			if ($this->Credit->save($this->request->data)) {

				$this->Session->setFlash(__('The credit has been saved'));

				$this->redirect(array('action' => 'index'));

			} else {

				$this->Session->setFlash(__('The credit could not be saved. Please, try again.'));

			}

		} else {

			$this->request->data = $this->Credit->read(null, $id);

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

		$this->Credit->id = $id;

		if (!$this->Credit->exists()) {

			throw new NotFoundException(__('Invalid credit'));

		}

		if ($this->Credit->delete()) {

			$this->Session->setFlash(__('Credit deleted'));

			$this->redirect(array('action' => 'index'));

		}

		$this->Session->setFlash(__('Credit was not deleted'));

		$this->redirect(array('action' => 'index'));

	}

}

