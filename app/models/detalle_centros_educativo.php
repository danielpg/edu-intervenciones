<?php
class DetalleCentrosEducativo extends AppModel {
	var $name = 'DetalleCentrosEducativo';
	var $useTable = "detalle_centros_educativos";
	var $displayField = "DetalleCentrosEducativo.codigo_modular";

	var $belongsTo = array(
		'CentrosEducativo' => array(
			'className' => 'CentrosEducativo',
			'foreignKey' => 'centro_educativo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		/*'Unidad' => array(
			'className' => 'Unidad',
			'foreignKey' => 'unidad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)*/
	);

}
