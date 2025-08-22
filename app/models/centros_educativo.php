<?php
class CentrosEducativo extends AppModel {
	var $name = 'CentrosEducativo';
	var $displayField = "nombre";

	var $belongsTo = array(
		'CentrosPoblado' => array(
			'className' => 'CentrosPoblado',
			'foreignKey' => 'centro_poblado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


}
