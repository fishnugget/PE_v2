<?php
App::uses('AppModel', 'Model');
/**
 * Credit Model
 *
 */
class Employment extends AppModel {

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
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your address.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'city_state_zip' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your city, state, and zip.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'phone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your phone.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your email.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'position_desired' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your position desired.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'current_or_recent_employment' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your current or recent employment.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'current_title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your current title.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
					),
		'employed_from' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter employed from.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
					),
		'employed_to' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter employed to.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
					),
		'position_responsibilities' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your position responsibilities.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
					),
		'reason_for_leaving' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your reason for leaving.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
											),
		'referred_by' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter who you were referred by.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
					),
		'cover_letter' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your cover letter.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
    );
}
