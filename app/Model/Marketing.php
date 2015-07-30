<?php
App::uses('AppModel', 'Model');
/**
 * Marketing Model
 *
 */
class Marketing extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'marketing';

/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'name';
	public $order = 'userid';

}
