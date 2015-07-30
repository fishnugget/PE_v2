<?php
App::uses('AppModel', 'Model');
/**
 * Credit Model
 *
 */
class Returns extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = false;

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'quantity_01' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter quantity.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'parts_01' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the part number.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'brand_code_01' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the brand.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'return_reason_01' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your reason for return.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
					),
				'quantity_02' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter quantity.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'parts_02' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the part number.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'brand_code_02' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the brand.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'return_reason_02' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your reason for return.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
					),
				'quantity_03' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter quantity.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'parts_03' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the part number.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'brand_code_03' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the brand.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'return_reason_03' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your reason for return.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
							),
					),
				'quantity_04' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter quantity.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'parts_04' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the part number.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'brand_code_04' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the brand.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'return_reason_04' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your reason for return.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
							),
					),
				'quantity_05' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter quantity.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'parts_05' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the part number.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'brand_code_05' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the brand.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'return_reason_05' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your reason for return.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
							),
					),
				'quantity_06' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter quantity.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'parts_06' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the part number.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'brand_code_06' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the brand.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'return_reason_06' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your reason for return.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
							),
		),
		'additional_comments' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter any additional comments.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
    );
}
