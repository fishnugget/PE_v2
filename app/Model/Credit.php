<?php
App::uses('AppModel', 'Model');
/**
 * Credit Model
 *
 */
class Credit extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'credit';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'business_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'You must supply a business name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tax_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'You must supply a tax id',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'terms' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select terms',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'business_years' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter number of years in business',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'buyer_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a buyer\'s name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'po_req' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Do you require a PO Number?',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address_street' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a street address',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address_city' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a city',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address_state' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a state',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address_zip' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a zipcode',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address_phone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a phone number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'property_value' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a property value',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mortgage' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the amount of your mortgage',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'monthly_sales' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your monthly sales amount',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'bank_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your bank name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'bank_account' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your bank account number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'bank_contact' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your bank\'s contact name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'bank_phone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your bank\'s phone number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'bank_fax' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your bank\'s fax number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'owner_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your owner\'s name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'owner_address' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your owner\'s address',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'owner_city' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your owner\'s city',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'owner_state' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your owner\'s state',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'owner_zip' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your owner\'s zipcode',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'owner_phone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your owner\'s phone number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'owner_social' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your owner\'s social security #',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade1_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Name is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade1_city' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'City is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade1_state' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'State is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade1_zip' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Zip Code is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade1_acct' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Account # is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade1_phone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Phone number is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade1_fax' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Fax is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade2_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Name is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade2_city' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'City is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade2_state' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'State is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade2_zip' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Zip code # is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade2_acct' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Account # is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade2_phone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Phone # is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade3_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Name is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade3_city' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Required Field',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade3_state' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'State is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade3_zip' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Required Field',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade3_acct' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Account # is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade3_phone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Phone # is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
