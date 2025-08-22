<?php
class CentrosPoblado extends AppModel {

	var $name = 'CentrosPoblado';
	var $displayField = "nombre";
	var $order = "CentrosPoblado.nombre ASC";

	var $belongsTo = array(
		'Distrito' => array(
			'className' => 'Distrito',
			'foreignKey' => 'distrito_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $validate = array(
        'nombre' => array(
			'rule' => 'notEmpty',
			'allowEmpty' => false,
			'message' => 'Dato invalido.'
		));

}


?>
