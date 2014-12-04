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

//    public $hasOne = array(
//        'Funcionario' => array(
//            'className' => 'Funcionario',
//            'dependent' => true
//        )
    );

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
	);
}
