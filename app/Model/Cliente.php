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
	public $primaryKey = 'pessoas_idPessoa';

    public $belongsTo = array(
        'Pessoa' => array(
            'className' => 'Pessoa',
            'foreignKey' => 'pessoas_idPessoa'
        )
    );

}
