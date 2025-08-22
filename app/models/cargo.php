<?php
class Cargo extends AppModel {
	var $name = 'Cargo';
	//The Associations below have been created with all possible keys, those that are not needed can be removed


	var $displayField = "nombre";
	var $order = "Cargo.nombre ASC";


	var $validate = array(
        'nombre' => array(
			'rule' => 'notEmpty',
			'allowEmpty' => false,
			'message' => 'Dato invalido.'
		));

}
