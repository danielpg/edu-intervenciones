<?php
class Departamento extends AppModel {

	var $name = 'Departamento';
	var $displayField = "nombre";
	var $order = "Departamento.nombre ASC";

	var $validate = array(
        'nombre' => array(
			'rule' => 'notEmpty',
			'allowEmpty' => false,
			'message' => 'Dato invalido.'
		));

}


?>
