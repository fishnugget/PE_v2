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
class UsersController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
  public $name = 'Users';

/**
 * This controller does not use a model
 *
 * @var array
 */
  public $uses = array();
  //Changed 2/26 MJ - added Search for QuickOrder public $components = array('Order');
  public $components = array('Order','Search');


  public function beforeFilter(){
    parent::beforeFilter();
  }
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
  public function login(){
    if ($this->Auth->user())
      $this->redirect(array('controller' => 'users', 'action' => 'members'));

    $data = array();
    if (!empty($this->request->data))
      if ($this->Auth->login()) {
        $this->redirect(array('controller' => 'search', 'action' => 'ymm'));
      } else {
        $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
      }
  }

  public function delivery(){
    $run = explode('(', $this->user['BT'][0]);
    $run = explode(')', $run[1]);
    $run = $run[0];
    $this->loadModel('Delivery');
    $truck_run = $this->Delivery->find('all' ,array('conditions' => array('run LIKE' => '%'.$run.'%')));
    return $truck_run[0]['Delivery'];
    //$this->set('delivery',$tnuck_run);
  }

  public function members(){
    //$results = $this->Session->read('search');

    $this->set('results', $this->Session->read('search'));

  }
  public function testtab() {

  }

  public function account(){
  //$this->set('delivery',$this->delivery());
  // 4/14/14 tried, no luck:$this->requestAction(array('controller' => 'orders', 'action' => 'history2'));

  $history = $this->Order->history();
    //debug($history);
    $paginating_array = array();
    if (!empty($history->history->OPEN)) {
      foreach($history->history->OPEN as &$f){
        $f[6] = 'OPEN';
        $f[7] = substr($f[1], -2).$f[1];
        array_push($paginating_array,$f);
      }
    }
    if (!empty($history->history->SHIPPED)) {
      foreach($history->history->SHIPPED as &$f){
        $f[6] = 'SHIPPED';
        $f[7] = substr($f[1], -2).$f[1];
        array_push($paginating_array,$f);
      }
    }

    $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $dir = (!empty($_GET['dir']) && $_GET['dir'] == 'asc') ? 'asc' : 'desc';

    if (!empty($_GET['sort']) && $_GET['sort'] == 'order') {
      if ($dir == 'asc') {
        $paginating_array = $this->subval_sort($paginating_array, 0, true);
      } else if ($dir == 'desc') {
        $paginating_array = $this->subval_sort($paginating_array, 0, false);
      }
    } else if (!empty($_GET['sort']) && $_GET['sort'] == 'date') {
      if ($dir == 'asc') {
        $paginating_array = $this->subval_sort($paginating_array, 7, true);
      } else if ($dir == 'desc') {
        $paginating_array = $this->subval_sort($paginating_array, 7, false);
      }
    } else if (!empty($_GET['sort']) && $_GET['sort'] == 'amount') {
      if ($dir == 'asc') {
        $paginating_array = $this->subval_sort($paginating_array, 3, true);
      } else if ($dir == 'desc') {
        $paginating_array = $this->subval_sort($paginating_array, 3, false);
      }
    }else if (!empty($_GET['sort']) && $_GET['sort'] == 'status') {
      if ($dir == 'asc') {
        $paginating_array = $this->subval_sort($paginating_array, 5, true);
      } else if ($dir == 'desc') {
        $paginating_array = $this->subval_sort($paginating_array, 5, false);
      }
    }

    $pages = array_chunk($paginating_array, 50);

    if(!$history){
      $this->Session->setFlash(__("Your search returned no results."), 'default', array('class' => 'failure'));
      $this->redirect($this->referer());
    }else{
      $this->set('dir', $dir);
      $this->set('page', (int) $page);
      $this->set('history', $pages);
    }
  }
  public function logout(){
    $this->Auth->logout();
    $this->Session->destroy();
    $this->redirect(array('controller' => 'pages', 'action' => '/'));
  }

}
