<?php
App::uses('AppModel', 'Model');
/**
 * Linecard Model
 *
 */
class Linecard extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'linecard';

/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'name';
	public $order = 'name';

}
