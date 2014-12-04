<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 */
class Cliente extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id';

/**
 * Validation rules
 *
 * @var array
 */
    public $validate = array(
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Digite o nome.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'cpf' => array(
			'rule' => array('minLength', 11, 'maxLength', 11),
			'message' => 'O CPF deve ter 11 números.',
			'allowEmpty' => true,
			'required' => false,
			//'last' => false, // Stop validation after this rule
			'on' => 'null'
		),
		'rg' => array(
			'rule' => array('minLength', 9, 'maxLength', 9),
			'message' => 'O RG deve ter 9 números.',
			'allowEmpty' => true,
			'required' => false,
			//'last' => false, // Stop validation after this rule
			'on' => 'null'
		),
   );

}
