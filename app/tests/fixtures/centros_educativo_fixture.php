<?php
/* CentrosEducativo Fixture generated on: 2013-05-15 20:49:14 : 1368668954 */
class CentrosEducativoFixture extends CakeTestFixture {
	var $name = 'CentrosEducativo';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'codigo_busqueda' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'codigo_local' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'anexo' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'fecha_creacion' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'direccion' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'centro_poblado_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_centros_educativos_centros_poblados1' => array('column' => 'centro_poblado_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'codigo_busqueda' => 'Lorem ipsum dolor sit amet',
			'codigo_local' => 'Lorem ipsum dolor sit amet',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'anexo' => 1,
			'fecha_creacion' => '2013-05-15 20:49:14',
			'direccion' => '2013-05-15 20:49:14',
			'centro_poblado_id' => 1
		),
	);
}
