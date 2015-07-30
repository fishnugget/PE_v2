<?php
App::uses('AppModel', 'Model');
/**
 * Users Model
 *
 */
class Delivery extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'delivery';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'run';
	public $order = 'run';

}
