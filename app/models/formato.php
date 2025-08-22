<?php
class Formato extends AppModel {
	var $name = 'Formato';

	var $displayField = "nombre";
	var $order = "Formato.nombre ASC";


	var $validate = array(
        'nombre' => array(
			'rule' => 'notEmpty',
			'allowEmpty' => false,
			'message' => 'Dato invalido.'
		));

}
