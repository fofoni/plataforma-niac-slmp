<?php
/**
 * FuncionarioFixture
 *
 */
class FuncionarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'pessoas_idPessoa' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'supervisor' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'ativo' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'area' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dataEntrada' => array('type' => 'date', 'null' => true, 'default' => null),
		'dataSaida' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'pessoas_idPessoa', 'unique' => 1),
			'username' => array('column' => 'username', 'unique' => 1),
			'funcionarios_FKIndex1' => array('column' => 'pessoas_idPessoa', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'pessoas_idPessoa' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'supervisor' => 1,
			'ativo' => 1,
			'area' => 'Lorem ipsum dolor sit amet',
			'dataEntrada' => '2014-11-30',
			'dataSaida' => '2014-11-30'
		),
	);

}
