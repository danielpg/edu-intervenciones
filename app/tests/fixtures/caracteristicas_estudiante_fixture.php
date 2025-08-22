<?php
/* CaracteristicasEstudiante Fixture generated on: 2013-05-15 20:54:01 : 1368669241 */
class CaracteristicasEstudianteFixture extends CakeTestFixture {
	var $name = 'CaracteristicasEstudiante';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_creacion' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'fecha_modificacion' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'fecha_creacion' => '2013-05-15 20:54:01',
			'fecha_modificacion' => '2013-05-15 20:54:01'
		),
	);
}
