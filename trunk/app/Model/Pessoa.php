<?php
App::uses('AppModel', 'Model');
/**
 * Pessoa Model
 *
 */
class Pessoa extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idPessoa';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'dataNascimento' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
