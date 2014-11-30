<?php
/**
 * CasoFixture
 *
 */
class CasoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idCaso' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'chaveAntiga' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'demanda' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dataAbertura' => array('type' => 'date', 'null' => true, 'default' => null),
		'dataFechamento' => array('type' => 'date', 'null' => true, 'default' => null),
		'permissaoPesquisa' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'observacao' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idCaso', 'unique' => 1)
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
			'idCaso' => 1,
			'chaveAntiga' => 'Lorem ipsum dolor sit amet',
			'demanda' => 'Lorem ipsum dolor sit amet',
			'dataAbertura' => '2014-11-29',
			'dataFechamento' => '2014-11-29',
			'permissaoPesquisa' => 1,
			'observacao' => 'Lorem ipsum dolor sit amet'
		),
	);

}
