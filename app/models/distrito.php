<?php
class Distrito extends AppModel {

	var $name = 'Distrito';
	var $displayField = "nombre";
	var $order = "Distrito.nombre ASC";

	var $belongsTo = array(
		'Provincia' => array(
			'className' => 'Provincia',
			'foreignKey' => 'provincia_id',
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
