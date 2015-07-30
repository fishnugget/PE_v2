<?php
App::uses('AppModel', 'Model');
/**
 * Users Model
 *
 */
class Salesman extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'salesmen';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $order = 'name';

}
