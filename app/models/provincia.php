<?php
class Provincia extends AppModel {

	var $name = 'Provincia';
	var $displayField = "nombre";
	var $order = "Provincia.nombre ASC";

	var $belongsTo = array(
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'departamento_id',
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
