<?php
App::uses('AppModel', 'Model');
/**
 * CConfile Model
 *
 */
class CConfile extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cc_on_file';

/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'name';
	public $order = 'id';

}
