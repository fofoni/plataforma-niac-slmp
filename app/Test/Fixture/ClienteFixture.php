<?php
/**
 * ClienteFixture
 *
 */
class ClienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'pessoas_idPessoa' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'chaveAntiga' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cor' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'genero' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nomeSocial' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dataCadastro' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'pessoas_idPessoa', 'unique' => 1),
			'clientes_FKIndex1' => array('column' => 'pessoas_idPessoa', 'unique' => 0)
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
			'chaveAntiga' => 'Lorem ipsum dolor sit amet',
			'cor' => 'Lorem ipsum dolor sit amet',
			'genero' => 'Lorem ipsum dolor sit amet',
			'nomeSocial' => 'Lorem ipsum dolor sit amet',
			'dataCadastro' => '2014-12-02'
		),
	);

}
