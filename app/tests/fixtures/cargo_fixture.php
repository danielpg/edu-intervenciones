<?php
/* Cargo Fixture generated on: 2013-05-15 20:54:02 : 1368669242 */
class CargoFixture extends CakeTestFixture {
	var $name = 'Cargo';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_creacion' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'fecha_modificacion' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'fecha_creacion' => '2013-05-15 20:54:02',
			'fecha_modificacion' => '2013-05-15 20:54:02'
		),
	);
}
