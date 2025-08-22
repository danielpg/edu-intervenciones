<?php
/* CentroPoblado Fixture generated on: 2013-05-15 20:54:04 : 1368669244 */
class CentroPobladoFixture extends CakeTestFixture {
	var $name = 'CentroPoblado';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'longitud' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'latitud' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'fecha_creacion' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'fecha_modificacion' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'distrito_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_centros_poblados_distritos3' => array('column' => 'distrito_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'longitud' => 1,
			'latitud' => 1,
			'fecha_creacion' => '2013-05-15 20:54:04',
			'fecha_modificacion' => '2013-05-15 20:54:04',
			'distrito_id' => 1
		),
	);
}
