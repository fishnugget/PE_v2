<?php
App::uses('AppModel', 'Model');
/**
 * Rebate Model
 *
 */
class Rebate extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'rebate';

/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'name';
	public $order = 'id';

}
