<?php
App::uses('AppModel', 'Model');

class Order extends AppModel {
  public $name = "Order";
  public $useTable = "orders";
  public $validate = array();
}
